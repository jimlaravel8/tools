<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\ProjectsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\MainCategory;
use Validator;
use DB;

class MainCategoriesController extends Controller
{
    public function mainCategoriesShow()
    {
        $maincategories = DB::table('maincategories')->get();
        return view('Admin-lte.maincategoriesview',compact('maincategories'));
    }
    public function maincategoriesCreate()
    {
        return view('Admin-lte.createmaincategory');
    }

    public function storeMaincategories(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required'
        ]);
        $maincategories = new MainCategory();
        $maincategories->name = $request->name;
        $maincategories->description = $request->description;
        $maincategories->save();

        return redirect()->route('maincategories')->with('message','Main Category created successfully');
    }

    public function Editmaincategories($id)
    {
        $maincategories = DB::table('maincategories')->where('id',$id)->first();
        return view('Admin-lte.editmaincategories',compact('maincategories'));
    }

    public function Updatemaincategories(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $update = DB::table('maincategories')->where('id',$id)->update($data);
        return Redirect()->route('maincategories')->with('message','Maincategory Updated');

    }

    public function Deletecategories($id)
    {
        DB::table('maincategories')->where('id',$id)->delete();
        return redirect()->back()->with('message','Location deleted');
    }

    public function export() 
    {
        return Excel::download(new ProjectsExport, 'maincategories.csv');
    }

    public function categoriesShow()
    {
        return view('Admin-lte.subcategoryview');
    }

    public function categoriesCreate()
    {
        return view('Admin-lte.createsubcategory');
    }
}
