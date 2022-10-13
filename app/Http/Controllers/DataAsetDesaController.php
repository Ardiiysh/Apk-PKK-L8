<?php

namespace App\Http\Controllers;

use App\Models\DataAsetDesa;
use Illuminate\Http\Request;
use App\Exports\DataAsetDesaExport;
use Maatwebsite\Excel\Facades\Excel;
class DataAsetDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAsetDesas = DataAsetDesa::All();
    
        return view('dataAsetDesas.index',compact('dataAsetDesas'));
    }

    public function export_excel()
	{
		return Excel::download(new DataAsetDesaExport, 'Laporan  Data Aset Desa .xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataAsetDesas.create');
        //
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

            'id_data_aset' => 'required',
            'id_aset_desa' => 'required',
            'volume' => 'required',
            'satuan' => 'required',
        ]);
    
        DataAsetDesa::create($request->all());
     
        return redirect()->route('dataAsetDesas.index')
                        ->with('success','Data Aset Desa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataAsetDesa  $dataAsetDesa
     * @return \Illuminate\Http\Response
     */
    public function show(DataAsetDesa $dataAsetDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataAsetDesa  $dataAsetDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataAsetDesa $dataAsetDesa)
    {
        return view('dataAsetDesas.edit',compact('dataAsetDesa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataAsetDesa  $dataAsetDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataAsetDesa $dataAsetDesa)
    {
        $request->validate([

            'id_data_aset' => 'required',
            'id_aset_desa' => 'required',
            'volume' => 'required',
            'satuan' => 'required',
        ]);
     
         $dataAsetDesa->update($request->all());
     
         return redirect()->route('dataAsetDesas.index')
                         ->with('success','Data Aset Desa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataAsetDesa  $dataAsetDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataAsetDesa $dataAsetDesa)
    {
        $dataAsetDesa->delete();
    
        return redirect()->route('dataAsetDesas.index')
                        ->with('success',' Data Aset Desa deleted successfully');
    }
}
