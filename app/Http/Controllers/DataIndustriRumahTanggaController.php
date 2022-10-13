<?php

namespace App\Http\Controllers;

use App\Models\DataIndustriRumahTangga;
use Illuminate\Http\Request;
use App\Exports\DataIndustriRumahTanggaExport;
use Maatwebsite\Excel\Facades\Excel;

class DataIndustriRumahTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataIndustriRumahTanggas = DataIndustriRumahTangga::All();
    
        return view('dataIndustriRumahTanggas.index',compact('dataIndustriRumahTanggas'));
    }

    public function export_excel()
	{
		return Excel::download(new DataIndustriRumahTanggaExport, 'Laporan Data Industri Rumah Tangga.xlsx');
	}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataIndustriRumahTanggas.create');

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
            'id_data_industri' => 'required',
            'id_industri_rumah_tangga' => 'required',
            'volume' => 'required',
            'satuan' => 'required',
         
        ]);
    
        DataIndustriRumahTangga::create($request->all());
     
        return redirect()->route('dataIndustriRumahTanggas.index')
                        ->with('success','IndustriRumahTangga created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataIndustriRumahTangga  $dataIndustriRumahTangga
     * @return \Illuminate\Http\Response
     */
    public function show(DataIndustriRumahTangga $dataIndustriRumahTangga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataIndustriRumahTangga  $dataIndustriRumahTangga
     * @return \Illuminate\Http\Response
     */
    public function edit(DataIndustriRumahTangga $dataIndustriRumahTangga)
    {
        return view('dataIndustriRumahTanggas.edit', compact('dataIndustriRumahTangga'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataIndustriRumahTangga  $dataIndustriRumahTangga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataIndustriRumahTangga $dataIndustriRumahTangga)
    {
        $request->validate([
            'id_data_industri' => 'required',
            'id_industri_rumah_tangga' => 'required',
            'volume' => 'required',
            'satuan' => 'required',
         
        ]);
 
     $dataIndustriRumahTangga->update($request->all());
 
     return redirect()->route('dataIndustriRumahTanggas.index')
                     ->with('success','dataIndustriRumahTangga updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataIndustriRumahTangga  $dataIndustriRumahTangga
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataIndustriRumahTangga $dataIndustriRumahTangga)
    {
        $dataIndustriRumahTangga->delete();
    
        return redirect()->route('dataIndustriRumahTanggas.index')
                        ->with('success','dataIndustriRumahTangga deleted successfully');
    }
}
