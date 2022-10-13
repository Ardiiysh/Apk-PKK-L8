<?php

namespace App\Http\Controllers;

use App\Models\IndustriRumahTangga;
use Illuminate\Http\Request;
use App\Exports\IndustriRumahTanggaExport;
use Maatwebsite\Excel\Facades\Excel;

class IndustriRumahTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industriRumahTanggas = IndustriRumahTangga::All();
    
        return view('industriRumahTanggas.index',compact('industriRumahTanggas'));
    }

    public function export_excel()
	{
		return Excel::download(new IndustriRumahTanggaExport, 'Laporan Industri Rumah Tangga.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('industriRumahTanggas.create');

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
    
        IndustriRumahTangga::create($request->all());
     
        return redirect()->route('industriRumahTanggas.index')
                        ->with('success','IndustriRumahTangga created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IndustriRumahTangga  $industriRumahTangga
     * @return \Illuminate\Http\Response
     */
    public function show(IndustriRumahTangga $industriRumahTangga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndustriRumahTangga  $industriRumahTangga
     * @return \Illuminate\Http\Response
     */
    public function edit(IndustriRumahTangga $industriRumahTangga)
    {
        return view('industriRumahTanggas.edit', compact('industriRumahTangga'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IndustriRumahTangga  $industriRumahTangga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndustriRumahTangga $industriRumahTangga)
    {
        $request->validate([
            'kategori' => 'required',
            'komoditi' => 'required',
            'keterangan' => 'required',
         
        ]);
 
     $industriRumahTangga->update($request->all());
 
     return redirect()->route('industriRumahTanggas.index')
                     ->with('success','industriRumahTangga updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndustriRumahTangga  $industriRumahTangga
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndustriRumahTangga $industriRumahTangga)
    {
        $industriRumahTangga->delete();
    
        return redirect()->route('industriRumahTanggas.index')
                        ->with('success','industriRumahTangga deleted successfully');
    }
}
