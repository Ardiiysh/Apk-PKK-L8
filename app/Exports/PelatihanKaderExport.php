<?php

namespace App\Exports;

use App\Models\PelatihanKadert;
use Maatwebsite\Excel\Concerns\FromCollection;

class PelatihanKaderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PelatihanKadert::all();
    }
}
