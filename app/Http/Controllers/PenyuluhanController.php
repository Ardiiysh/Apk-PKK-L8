<?php

namespace App\Http\Controllers;

use App\Models\Penyuluhan;
use Illuminate\Http\Request;

class PenyuluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyuluhans = Penyuluhan::All();
    
        return view('penyuluhans.index',compact('penyuluhans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyuluhans.create');
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
            'nama_kegiatan' => 'required',
            'jenis_penyuluhan' => 'required',
            'keterangan' => 'required',
        ]);
    
        Penyuluhan::create($request->all());
     
        return redirect()->route('penyuluhans.index')
                        ->with('success','Penyuluhan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyuluhan  $penyuluhan
     * @return \Illuminate\Http\Response
     */
    public function show(Penyuluhan $penyuluhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyuluhan  $penyuluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyuluhan $penyuluhan)
    {
        return view('penyuluhans.edit',compact('penyuluhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyuluhan  $penyuluhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyuluhan $penyuluhan)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'jenis_penyuluhan' => 'required',
            'keterangan' => 'required',
         ]);
     
         $penyuluhan->update($request->all());
     
         return redirect()->route('penyuluhans.index')
                         ->with('success','penyuluhan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyuluhan  $penyuluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyuluhan $penyuluhan)
    {
        $penyuluhan->delete();
    
        return redirect()->route('penyuluhans.index')
                        ->with('success','penyuluhan deleted successfully');
    }
}
