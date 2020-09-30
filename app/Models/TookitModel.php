<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TookitModel extends Model
{
    protected $table = 'toolkits';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function create($request){
    	$name = $request->input('name');
    	$description = $request->input('description');
        $this->name = $name;
        $this->description = $description;
        $this->status = 1;
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
        $this->save();
        return $this;

    }
}
