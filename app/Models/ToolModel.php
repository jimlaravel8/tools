<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToolModel extends Model
{
  	protected $table = 'tools';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function create($request){
    	$name = $request->input('name');
    	$code = $request->input('code');
        $serial = $request->input('serial');
    	$image = $request->input('image');
    	$category = $request->input('category');
    	$unit = $request->input('unit');
    	$state = $request->input('state');
    	$brand = $request->input('brand');
    	$cost = $request->input('cost');
    	$price = $request->input('price');
    	$purchase_details = $request->input('purchase_details');
    	$description = $request->input('description');
    	$callibration = $request->input('callibration');
    	$warranty = $request->input('warranty');
        $auth = $request->input('auth');

        // dd($category);

        $this->name = $name;
        $this->code = $code;
        $this->image = $image;
        $this->category_id = $category;
        $this->auth = $auth;
        $this->brand_id = $brand;
        $this->unit_id = $unit;
        $this->description = $description;
        $this->comment = '';
        $this->expected = '';
        $this->cost = $cost;
        $this->price = $price;
        $this->purchase_details = $purchase_details;
        $this->callibration = $callibration;
        $this->warranty = $warranty;
        $this->status = 1;
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
        $this->save();
        return $this;

    }


}

