<?php

namespace App\Http\Controllers;

use App\Models\KegiatanWarga;
use Illuminate\Http\Request;
use App\Exports\KegiatanWargaExport;
use Maatwebsite\Excel\Facades\Excel;
class KegiatanWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatanWargas = KegiatanWarga::All();
    
        return view('kegiatanWargas.index',compact('kegiatanWargas'));
    }

    public function export_excel()
	{
		return Excel::download(new KegiatanWargaExport, 'Laporan Kegiatan Warga.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatanWargas.create');
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
            'id_warga' => 'required',
            'p4' => 'required',
            'kerjabakti' => 'required',
            'rukun_kematian' => 'required',
            'keagamaan' => 'required',
            'jimpitan' => 'required',
            'arisan' => 'required',
            'lainnya' => 'required',
            'keterangan' => 'required',
         
        ]);
    
        KegiatanWarga::create($request->all());
     
        return redirect()->route('kegiatanWargas.index')
                        ->with('success','Kegiatan Warga created successfully.');
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
        return view('kegiatanWargas.edit', compact('kegiatanWarga'));
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
                'id_warga' => 'required',
                'p4' => 'required',
                'kerjabakti' => 'required',
                'rukun_kematian' => 'required',
                'keagamaan' => 'required',
                'jimpitan' => 'required',
                'arisan' => 'required',
                'lainnya' => 'required',
                'keterangan' => 'required',
             
        ]);
     
         $kegiatanWarga->update($request->all());
     
         return redirect()->route('kegiatanWargas.index')
                         ->with('success','kegiatanWarga updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KegiatanWarga  $kegiatanWarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(KegiatanWarga $kegiatanWarga)
    {
        $kegiatanWarga->delete();
    
        return redirect()->route('kegiatanWargas.index')
                        ->with('success','kegiatan Warga deleted successfully');
    }
}