<?php

namespace App\Http\Controllers;

use App\Models\DataIndustri;
use Illuminate\Http\Request;
use App\Exports\DataIndustriExport;
use Maatwebsite\Excel\Facades\Excel;

class DataIndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataIndustris = DataIndustri::All();
    
        return view('dataIndustris.index',compact('dataIndustris'));
    }
    
    public function export_excel()
	{
		return Excel::download(new DataIndustriExport, 'Laporan Data Industri.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataIndustris.create');
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
            'keterangan' => 'required',
        ]);
    
        DataIndustri::create($request->all());
     
        return redirect()->route('dataIndustris.index')
                        ->with('success','Data Industri created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataIndustri  $dataIndustri
     * @return \Illuminate\Http\Response
     */
    public function show(DataIndustri $dataIndustri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataIndustri  $dataIndustri
     * @return \Illuminate\Http\Response
     */
    public function edit(DataIndustri $dataIndustri)
    {
        return view('dataIndustris.edit', compact('dataIndustri'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataIndustri  $dataIndustri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataIndustri $dataIndustri)
    {
        $request->validate([
            'id_dasawisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
            'keterangan' => 'required',
        ]);
     
         $dataIndustri->update($request->all());
     
         return redirect()->route('dataIndustris.index')
                         ->with('success','dataIndustri updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataIndustri  $dataIndustri
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataIndustri $dataIndustri)
    {
        $dataIndustri->delete();
    
        return redirect()->route('dataIndustris.index')
                        ->with('success','dataIndustri deleted successfully');
    }
}
