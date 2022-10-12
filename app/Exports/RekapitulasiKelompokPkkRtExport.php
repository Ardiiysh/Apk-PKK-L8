<?php

namespace App\Exports;

use App\Models\RekapitulasiKelompokPkkRt;
use Maatwebsite\Excel\Concerns\FromCollection;

class RekapitulasiKelompokPkkRtExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RekapitulasiKelompokPkkRt::all();
    }
}
