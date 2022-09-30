<?php

namespace App\Http\Controllers;

use App\Models\CatatanDiesnatalis;
use Illuminate\Http\Request;

class CatatanDiesnatalisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatanDiesnataliss = CatatanDiesnatalis::All();
    
        return view('catatanDiesnataliss.index',compact('catatanDiesnataliss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catatanDiesnataliss.create');
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
            'bulan' => 'required',
            'tahun' => 'required',
            'nama_ibu' => 'required',
            'nama_suami' => 'required',
            'nama_anak' => 'required',
            'status' => 'required',
            'jk' => 'required',
            'tanggal' => 'required',
            'akta' => 'required',
            'sebab' => 'required',
            'keterangan' => 'required',
        ]);
    
        catatanDiesnatalis::create($request->all());

        return redirect()->route('catatanDiesnataliss.index')
                        ->with('success','catatanDiesnatalis created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatatanDiesnatalis  $catatanDiesnatalis
     * @return \Illuminate\Http\Response
     */
    public function show(CatatanDiesnatalis $catatanDiesnatalis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatatanDiesnatalis  $catatanDiesnatalis
     * @return \Illuminate\Http\Response
     */
    public function edit(CatatanDiesnatalis $catatanDiesnatalis)
    {
        return view('catatanDiesnataliss.edit',compact('catatanDiesnatalis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatatanDiesnatalis  $catatanDiesnatalis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatatanDiesnatalis $catatanDiesnatalis)
    {
        $request->validate([
            'id_dasawisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'nama_ibu' => 'required',
            'nama_suami' => 'required',
            'nama_anak' => 'required',
            'status' => 'required',
            'jk' => 'required',
            'tanggal' => 'required',
            'akta' => 'required',
            'sebab' => 'required',
            'keterangan' => 'required',
        ]);
    
        $catatanDiesnatalis->update($request->all());
    
        return redirect()->route('catatanDiesnataliss.index')
                        ->with('success','catatanDiesnatalis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatatanDiesnatalis  $catatanDiesnatalis
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatatanDiesnatalis $catatanDiesnatalis)
    {
        $catatanDiesnatalis->delete();
    
        return redirect()->route('catatanDiesnataliss.index')
                        ->with('success','catatanDiesnatalis deleted successfully');
    }
}
