<?php

namespace App\Http\Controllers;

use App\Models\AsetDesa;
use Illuminate\Http\Request;
use App\Exports\AsetDesaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class AsetDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asetDesas = AsetDesa::All();
    
        return view('asetDesas.index',compact('asetDesas'));
    }

    public function export_excel()
	{
		return Excel::download(new AsetDesaExport, 'Laporan Aset Desa .xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asetDesas.create');

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

            'kategori' => 'required',
            'komoditi' => 'required',
            'keterangan' => 'required',
        ]);
    
        AsetDesa::create($request->all());
     
        return redirect()->route('asetDesas.index')
                        ->with('success','Aset Desa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AsetDesa  $asetDesa
     * @return \Illuminate\Http\Response
     */
    public function show(AsetDesa $asetDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AsetDesa  $asetDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(AsetDesa $asetDesa)
    {
        return view('asetDesas.edit',compact('asetDesa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AsetDesa  $asetDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsetDesa $asetDesa)
    {
        $request->validate([

            'kategori' => 'required',
            'komoditi' => 'required',
            'keterangan' => 'required',
        ]);
     
         $asetDesa->update($request->all());
     
         return redirect()->route('asetDesas.index')
                         ->with('success','Aset Desa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsetDesa  $asetDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsetDesa $asetDesa)
    {
        $asetDesa->delete();
    
        return redirect()->route('asetDesas.index')
                        ->with('success','Aset Desa deleted successfully');
    }
}
