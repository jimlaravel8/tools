<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\BrandsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Brands;
use Validator;
use DB;

class BrandsController extends Controller
{
    public function brandsShow()
    {
        $brands = DB::table('brands')->get();
        return view('Admin-lte.brandlist',compact('brands'));
    }

    public function brandsCreate()
    {
        return view('Admin-lte.createbrands');
    }

    public function storeBrands(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ]);

        $brands = new Brands();
        $brands->name = $request->name;
        $brands->description = $request->description;
        $brands->save();

        return redirect()->route('brands')->with('message','Locations created successfully');

    }

    public function Editbrands($id)
    {
        $brands = DB::table('brands')->where('id',$id)->first();
        return view('Admin-lte.editbrands',compact('brands'));
    }

    public function Updatebrands(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $update = DB::table('brands')->where('id',$id)->update($data);
        return Redirect()->route('brands')->with('message','Brand Updated');

    }

    public function Deletebrands($id)
    {
        DB::table('brands')->where('id',$id)->delete();
        return redirect()->back()->with('message','Brand deleted');
    }

    public function export() 
    {
        return Excel::download(new BrandsExport, 'brands.csv');
    }
}
