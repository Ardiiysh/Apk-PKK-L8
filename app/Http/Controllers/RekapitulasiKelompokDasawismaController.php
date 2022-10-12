<?php

namespace App\Http\Controllers;

use App\Models\RekapitulasiKelompokDasawisma;
use Illuminate\Http\Request;
use App\Exports\RekapitulasiKelompokDasawismaExport;
use Maatwebsite\Excel\Facades\Excel;

class RekapitulasiKelompokDasawismaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekapitulasiKelompokDasawismas = RekapitulasiKelompokDasawisma::All();
    
        return view('rekapitulasiKelompokDasawismas.index',compact('rekapitulasiKelompokDasawismas'));
    }
    
    public function export_excel()
	{
		return Excel::download(new RekapitulasiKelompokDasawismaExport, 'Laporan RekapitulasiKelompokDasawisma.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekapitulasiKelompokDasawismas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_dasawisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
    
        RekapitulasiKelompokDasawisma::create($request->all());
     
        return redirect()->route('rekapitulasiKelompokDasawismas.index')
                        ->with('success','Rekapitulasi Kelompok Dasawisma created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RekapitulasiKelompokDasawisma  $rekapitulasiKelompokDasawisma
     * @return \Illuminate\Http\Response
     */
    public function show(RekapitulasiKelompokDasawisma $rekapitulasiKelompokDasawisma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RekapitulasiKelompokDasawisma  $rekapitulasiKelompokDasawisma
     * @return \Illuminate\Http\Response
     */
    public function edit(RekapitulasiKelompokDasawisma $rekapitulasiKelompokDasawisma)
    {
        return view('rekapitulasiKelompokDasawismas.edit',compact('rekapitulasiKelompokDasawisma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RekapitulasiKelompokDasawisma  $rekapitulasiKelompokDasawisma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RekapitulasiKelompokDasawisma $rekapitulasiKelompokDasawisma)
    {
        $request->validate([
            'id_dasawisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
     
         $rekapitulasiKelompokDasawisma->update($request->all());
     
         return redirect()->route('rekapitulasiKelompokDasawismas.index')
                         ->with('success','rekapitulasiKelompokDasawisma updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RekapitulasiKelompokDasawisma  $rekapitulasiKelompokDasawisma
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekapitulasiKelompokDasawisma $rekapitulasiKelompokDasawisma)
    {
        $rekapitulasiKelompokDasawisma->delete();
    
        return redirect()->route('rekapitulasiKelompokDasawismas.index')
                        ->with('success','pelatihan deleted successfully');
    }
}
