<?php

namespace App\Exports;

use App\Models\MainCategory;
use Maatwebsite\Excel\Concerns\FromCollection;

class LocationsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MainCategory::all();
    }
}
