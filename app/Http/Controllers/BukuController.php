<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::All();
    
        return view('bukus.index',compact('bukus'));
    }

    public function export_excel()
	{
		return Excel::download(new BukuExport, 'Laporan Buku.xlsx');
	}


   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bukus.create');
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
            'jenis_buku' => 'required',
            'kategori' => 'required',
            'keterangan' => 'required',
        ]);
    
        Buku::create($request->all());
     
        return redirect()->route('bukus.index')
                        ->with('success','buku created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('bukus.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
           'jenis_buku' => 'required',
           'kategori' => 'required',
           'keterangan' => 'required',
        ]);
    
        $buku->update($request->all());
    
        return redirect()->route('bukus.index')
                        ->with('success','buku updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
    
        return redirect()->route('bukus.index')
                        ->with('success','buku deleted successfully');
    }
}
