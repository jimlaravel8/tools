<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\LocationsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Locations;
use Validator;
use DB;

class SitesController extends Controller
{
    public function locationsShow()
    {
        $locations = DB::table('locations')->get();
        return view('Admin-lte.locationsview',compact('locations'));
    }

    public function locationsCreate()
    {
        return view('Admin-lte.createlocation');
    }

    public function storeLocations(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required'
        ]);

        $locations = new Locations();
        $locations->name = $request->name;
        $locations->description = $request->description;
        $locations->save();
        // dd($locations);

        return redirect()->route('locations')->with('message','Locations created successfully');

        return $validator;
    }

    public function Editlocations($id)
    {
        $locations = DB::table('locations')->where('id',$id)->first();
        return view('Admin-lte.editlocations',compact('locations'));
    }

    public function Updatelocations(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $update = DB::table('locations')->where('id',$id)->update($data);
        return Redirect()->route('locations')->with('message','State Updated');

    }

    public function Deletelocations($id)
    {
        DB::table('locations')->where('id',$id)->delete();
        return redirect()->back()->with('message','Location deleted');
    }

    public function export() 
    {
        return Excel::download(new LocationsExport, 'locations.csv');
    }
}
