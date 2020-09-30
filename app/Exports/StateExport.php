<?php

namespace App\Exports;

use App\Models\States;
use Maatwebsite\Excel\Concerns\FromCollection;

class StateExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return States::all();
    }
}
