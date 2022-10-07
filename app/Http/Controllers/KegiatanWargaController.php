<?php

namespace App\Http\Controllers;

use App\Models\KegiatanWarga;
use Illuminate\Http\Request;

class KegiatanWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataIndustris = DataIndustri::All();
    
        return view('dataIndustris.index',compact('dataIndustris'));
    }

    public function export_excel()
	{
		return Excel::download(new DataIndustriExport, 'Laporan Data Industri.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataIndustris.create');
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
            'keterangan' => 'required',
        ]);
    
        DataIndustri::create($request->all());
     
        return redirect()->route('dataIndustris.index')
                        ->with('success','Data Industri created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KegiatanWarga  $kegiatanWarga
     * @return \Illuminate\Http\Response
     */
    public function show(KegiatanWarga $kegiatanWarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KegiatanWarga  $kegiatanWarga
     * @return \Illuminate\Http\Response
     */
    public function edit(KegiatanWarga $kegiatanWarga)
    {
        return view('dataIndustris.edit', compact('dataIndustri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KegiatanWarga  $kegiatanWarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KegiatanWarga $kegiatanWarga)
    {
        $request->validate([
            'id_dasawisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
            'keterangan' => 'required',
        ]);
     
         $dataIndustri->update($request->all());
     
         return redirect()->route('dataIndustris.index')
                         ->with('success','dataIndustri updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KegiatanWarga  $kegiatanWarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(KegiatanWarga $kegiatanWarga)
    {
        //
    }
}