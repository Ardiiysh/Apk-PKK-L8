<?php

namespace App\Http\Controllers;

use App\Models\Dasawisma;
use Illuminate\Http\Request;

class DasawismaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dasawismas = Dasawisma::latest()->paginate(5);
    
        return view('dasawismas.index',compact('dasawismas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasawismas.create');
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
            'nama_dasawisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
            'keterangan' => 'required',
        ]);
    
        Dasawisma::create($request->all());
     
        return redirect()->route('dasawismas.index')
                        ->with('success','Dasawisma created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dasawisma  $dasawisma
     * @return \Illuminate\Http\Response
     */
    public function show(Dasawisma $dasawisma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dasawisma  $dasawisma
     * @return \Illuminate\Http\Response
     */
    public function edit(Dasawisma $dasawisma)
    {
        return view('dasawismas.edit',compact('dasawisma'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dasawisma  $dasawisma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dasawisma $dasawisma)
    {
        $request->validate([
            'nama_dasawisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
            'keterangan' => 'required',
        ]);
    
        $dasawisma->update($request->all());
    
        return redirect()->route('dasawismas.index')
                        ->with('success','dasawisma updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dasawisma  $dasawisma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dasawisma $dasawisma)
    {
        $dasawisma->delete();
    
        return redirect()->route('dasawismas.index')
                        ->with('success','dasawisma deleted successfully');
    }
}
