<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\ProjectsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Projects;
use Validator;
use DB;

class ProjectsController extends Controller
{
    public function projectsShow()
    {
        $projects = DB::table('projects')->get();
        return view('Admin-lte.projectlist',compact('projects'));
    }

    public function projectsCreate()
    {
        return view('Admin-lte.createproject');
    }

    public function storeProjects(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'description' => 'required'
        ]);

            $projects = new Projects();
            $projects->name = $request->name;
            $projects->description = $request->description;
            $projects->save();
            // dd($projects);
            
            return redirect()->route('projects')->with('message','Project created successfully');
    return $validator;

    }

    public function Editprojects($id)
    {
        $projects = DB::table('projects')->where('id',$id)->first();
        return view('Admin-lte.editprojects',compact('projects'));
    }

    public function Updateprojects(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $update = DB::table('projects')->where('id',$id)->update($data);
        return Redirect()->route('projects')->with('message','Project Updated');

    }

    public function Deleteprojects($id)
    {
        DB::table('projects')->where('id',$id)->delete();
        return redirect()->back()->with('message','Project deleted');
    }

    public function export() 
    {
        return Excel::download(new ProjectsExport, 'projects.csv');
    }
}
