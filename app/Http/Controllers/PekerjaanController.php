<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function getPekerjaan()
    {
        $data = Pekerjaan::get();

        return response()->json($data);
    }
}
