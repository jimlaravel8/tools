<?php

namespace App\Exports;

use App\Models\Locations;
use Maatwebsite\Excel\Concerns\FromCollection;

class LocationsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Locations::all();
    }
}
