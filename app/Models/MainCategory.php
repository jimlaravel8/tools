<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $table ='maincategories';
    protected $guarded = [];

    public function subcategories()
    {
        return $this->hasMany(\App\Models\SubCategories::class);
    }
}
