<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class StockModel extends Model
{
    protected $table = 'stocks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function create($request){
    	$transferer = $request->input('transferer');
    	$user_id = $request->input('user_id');
        $toolkit_id = $request->input('toolkit_id');
    	$warehouse = $request->input('warehouse');
    	$description = $request->input('description');
    	$job_card = $request->input('job_card');
    	$start_mileage = $request->input('start_mileage');
    	$stop_mileage = $request->input('stop_mileage');
    	$vehicle = $request->input('vehicle');
    	$supplier = $request->input('supplier');
    	$invoice = $request->input('invoice');
    	$lpo = $request->input('lpo');
    	$callibration = $request->input('callibration');
    	$tools = $request->input('tools');
    	$quantities = $request->input('quantities');

        $this->transferer = $transferer;
        $this->user_id = $user_id;
        $this->toolkit_id = $toolkit_id;
        $this->warehouse = $warehouse;
        $this->job_card = $job_card;
        $this->description = $description;
        $this->start_mileage = $start_mileage;
        $this->stop_mileage = $stop_mileage;
        $this->vehicle = $vehicle;
        $this->supplier = $supplier;
        $this->invoice = $invoice;
        $this->lpo = $lpo;
        // $this->tools = serialize($tools);
        // $this->quantities = serialize($quantities);
        $this->status = 1;
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
        $this->save();
        return $this;

    }
}
