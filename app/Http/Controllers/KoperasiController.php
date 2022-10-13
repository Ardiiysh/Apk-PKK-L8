<?php

namespace App\Http\Controllers;

use App\Models\Koperasi;
use Illuminate\Http\Request;
use App\Exports\KoperasiExport;
use Maatwebsite\Excel\Facades\Excel;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koperasis = Koperasi::All();
    
        return view('koperasis.index',compact('koperasis'));
    }
    
    public function export_excel()
	{
		return Excel::download(new KoperasiExport, 'Laporan Koperasi.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koperasis.create');

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
            'nama_koperasi' => 'required',
            'jenis_koperasi' => 'required',
            'status_hukum' => 'required',
            'anggota_laki_laki' => 'required',
            'anggota_perempuan' => 'required',
            'keterangan' => 'required',
        ]);
    
        Koperasi::create($request->all());
     
        return redirect()->route('koperasis.index')
                        ->with('success','koperasi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function show(Koperasi $koperasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Koperasi $koperasi)
    {
        return view('koperasis.edit',compact('koperasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Koperasi $koperasi)
    {
        $request->validate([
            'nama_koperasi' => 'required',
            'jenis_koperasi' => 'required',
            'status_hukum' => 'required',
            'anggota_laki_laki' => 'required',
            'anggota_perempuan' => 'required',
            'keterangan' => 'required',
        ]);
     
         $koperasi->update($request->all());
     
         return redirect()->route('koperasis.index')
                         ->with('success','Koperasi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Koperasi  $koperasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Koperasi $koperasi)
    {
        $koperasi->delete();
    
        return redirect()->route('koperasis.index')
                        ->with('success','koperasi deleted successfully');
    }
}
