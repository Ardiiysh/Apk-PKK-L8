<?php

namespace App\Http\Controllers;

use App\Models\RekapitulasiKelompokPkkRt;
use Illuminate\Http\Request;
use App\Exports\RekapitulasiKelompokPkkRtExport;
use Maatwebsite\Excel\Facades\Excel;

class RekapitulasiKelompokPkkRtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekapitulasiKelompokPkkRts = RekapitulasiKelompokPkkRt::All();
    
        return view('rekapitulasiKelompokPkkRts.index',compact('rekapitulasiKelompokPkkRts'));
    }
    
    public function export_excel()
	{
		return Excel::download(new RekapitulasiKelompokPkkRtExport, 'Laporan Rekapitulasi Kelompok Pkk Rt .xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekapitulasiKelompokPkkRts.create');

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
            'keterangan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
    
        RekapitulasiKelompokPkkRt::create($request->all());
     
        return redirect()->route('rekapitulasiKelompokPkkRts.index')
                        ->with('success','Rekapitulasi Kelompok Pkk Rt created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RekapitulasiKelompokPkkRt  $rekapitulasiKelompokPkkRt
     * @return \Illuminate\Http\Response
     */
    public function show(RekapitulasiKelompokPkkRt $rekapitulasiKelompokPkkRt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RekapitulasiKelompokPkkRt  $rekapitulasiKelompokPkkRt
     * @return \Illuminate\Http\Response
     */
    public function edit(RekapitulasiKelompokPkkRt $rekapitulasiKelompokPkkRt)
    {
        return view('rekapitulasiKelompokPkkRts.edit',compact('rekapitulasiKelompokPkkRt'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RekapitulasiKelompokPkkRt  $rekapitulasiKelompokPkkRt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RekapitulasiKelompokPkkRt $rekapitulasiKelompokPkkRt)
    {
        $request->validate([
            'keterangan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
    
         $rekapitulasiKelompokPkkRt->update($request->all());
     
         return redirect()->route('rekapitulasiKelompokPkkRts.index')
                         ->with('success','Rekapitulasi Kelompok Pkk Rt updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RekapitulasiKelompokPkkRt  $rekapitulasiKelompokPkkRt
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekapitulasiKelompokPkkRt $rekapitulasiKelompokPkkRt)
    {
        $rekapitulasiKelompokPkkRt->delete();
    
        return redirect()->route('rekapitulasiKelompokPkkRts.index')
                        ->with('success','Rekapitulasi Kelompok Pkk Rt deleted successfully');
    }
}
