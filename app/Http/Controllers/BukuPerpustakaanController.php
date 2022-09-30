<?php

namespace App\Http\Controllers;

use App\Models\BukuPerpustakaan;
use Illuminate\Http\Request;

class BukuPerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukuPerpustakaans = BukuPerpustakaan::All();
    
        return view('bukuPerpustakaans.index',compact('bukuPerpustakaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bukuPerpustakaans.create');
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
            'id_perpustakaan' => 'required',
            'id_buku' => 'required',
            'jumlah' => 'required',
        ]);
    
        BukuPerpustakaan::create($request->all());

        return redirect()->route('bukuPerpustakaans.index')
                        ->with('success','bukuPerpustakaan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BukuPerpustakaan  $bukuPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function show(BukuPerpustakaan $bukuPerpustakaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BukuPerpustakaan  $bukuPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function edit(BukuPerpustakaan $bukuPerpustakaan)
    {
        return view('bukuPerpustakaans.edit', compact('bukuPerpustakaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BukuPerpustakaan  $bukuPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BukuPerpustakaan $bukuPerpustakaan)
    {
        $request->validate([
            'id_perpustakaan' => 'required',
            'id_buku' => 'required',
            'jumlah' => 'required',
        ]);
    
        $bukuPerpustakaan->update($request->all());
    
        return redirect()->route('bukuPerpustakaans.index')
                        ->with('success','bukuPerpustakaan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BukuPerpustakaan  $bukuPerpustakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BukuPerpustakaan $bukuPerpustakaan)
    {
        $bukuPerpustakaan->delete();
    
        return redirect()->route('bukuPerpustakaans.index')
                        ->with('success','bukuPerpustakaan deleted successfully');
    }
}
