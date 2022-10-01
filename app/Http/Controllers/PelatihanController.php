<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Exports\PelatihanExport;
use Maatwebsite\Excel\Facades\Excel;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelatihans = Pelatihan::All();
    
        return view('pelatihans.index',compact('pelatihans'));
    }
    
    public function export_excel()
	{
		return Excel::download(new PelatihanExport, 'Laporan Pelatihan.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelatihans.create');
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
            'nama_pelatihan' => 'required',
            'kriteria_kader' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required',
        ]);
    
        Pelatihan::create($request->all());
     
        return redirect()->route('pelatihans.index')
                        ->with('success','pelatihan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelatihan $pelatihan)
    {
        return view('pelatihans.edit',compact('pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $request->validate([
            'nama_pelatihan' => 'required',
            'kriteria_kader' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required',
         ]);
     
         $pelatihan->update($request->all());
     
         return redirect()->route('pelatihans.index')
                         ->with('success','pelatihan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
    
        return redirect()->route('pelatihans.index')
                        ->with('success','pelatihan deleted successfully');
    }
}
