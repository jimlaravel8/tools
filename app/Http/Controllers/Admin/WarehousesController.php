<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Warehouse;
use Validator;
use DB;

class WarehousesController extends Controller
{
    public function warehousesShow()
    {
        $locations = DB::table('locations')->get();
        $warehouse = DB::table('warehouses')
        ->join('locations','warehouses.location_id','locations.id')
        ->select('warehouses.*','locations.name')
        ->get();
        return view('Admin-lte.warehousesview',compact('locations','warehouse'));
    }

    public function warehousesCreate()
    {
        $locations = DB::table('locations')->get();
        $warehouse = DB::table('warehouses')
        ->join('locations','warehouses.location_id','locations.id')
        ->select('warehouses.*','locations.name')
        ->get();
        return view('Admin-lte.createwarehouse',compact('locations','warehouse'));
        
    }

    public function storeWarehouses(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'location_id' => 'required',
            'name' => 'required',
        ]);
        $data = array();

        $data['name'] = $request->name;
        $data['location_id'] = $request->location_id;
        $data['description'] = $request->description;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        return redirect()->route('warehouses')->with('message','Locations created successfully');

    }
}
