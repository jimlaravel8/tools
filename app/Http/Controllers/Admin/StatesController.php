<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\StateExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\States;
use Validator;
use DB;

class StatesController extends Controller
{
    public function statesShow()
    {
        $states = DB::table('states')->get();
        return view('Admin-lte.statelist',compact('states'));
    }

    public function statesCreate()
    {
        return view('Admin-lte.createstates');
    }

    public function storeStates(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required'
        ]);
        $state = new States();
        $state->name = $request->name;
        $state->description = $request->description;
        $state->save();

        return redirect()->route('states')->with('message','Locations created successfully');
    }

    public function Editstates($id)
    {
        $states = DB::table('states')->where('id',$id)->first();
        return view('Admin-lte.editstates',compact('states'));
    }

    public function Updatestates(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $update = DB::table('states')->where('id',$id)->update($data);
        return Redirect()->route('states')->with('message','State Updated');

    }

    public function Deletestates($id)
    {
        DB::table('states')->where('id',$id)->delete();
        return redirect()->back()->with('message','State deleted');
    }

    public function export() 
    {
        return Excel::download(new StateExport, 'states.csv');
    }
}
