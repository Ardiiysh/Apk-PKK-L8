<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use App\Exports\WargaExport;
use Maatwebsite\Excel\Facades\Excel;
class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wargas = Warga::All();
    
        return view('wargas.index',compact('wargas'));
    }
    
    public function export_excel()
	{
		return Excel::download(new WargaExport, 'Laporan Warga.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wargas.create');

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
           'kepala_rumah_tangga' => 'required',
           'no_registrasi' => 'required',
           'no_ktp' => 'required',
           'nama_lengkap' => 'required',
           'jabatan_pkk' => 'required',
           'jk' => 'required',
           'tempat_lahir' => 'required',
           'tgl_lahir' => 'required',
           'status_perkawinan' => 'required',
           'status_dalam_keluarga' => 'required',
           'agama' => 'required',
           'alamat' => 'required',
           'pendidikan' => 'required',
           'pekerjaan' => 'required',
           'akseptor_kb' => 'required',
           'posyandu' => 'required',
           'program_bina_keluarga_balita' => 'required',
           'tabungan' => 'required',
           'kelompok_belajar' => 'required',
           'paud' => 'required',
           'koperasi' => 'required',
           'keterangan' => 'required',
        ]);
    
        Warga::create($request->all());
     
        return redirect()->route('wargas.index')
                        ->with('success','warga created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit(Warga $warga)
    {
        return view('wargas.edit',compact('warga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warga $warga)
    {
        $request->validate([
            'id_dasawisma' => 'required',
            'kepala_rumah_tangga' => 'required',
            'no_registrasi' => 'required',
            'no_ktp' => 'required',
            'nama_lengkap' => 'required',
            'jabatan_pkk' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'status_perkawinan' => 'required',
            'status_dalam_keluarga' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'akseptor_kb' => 'required',
            'posyandu' => 'required',
            'program_bina_keluarga_balita' => 'required',
            'tabungan' => 'required',
            'kelompok_belajar' => 'required',
            'paud' => 'required',
            'koperasi' => 'required',
            'keterangan' => 'required',
         ]);
     
         $warga->update($request->all());
     
         return redirect()->route('wargas.index')
                         ->with('success','warga updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warga $warga)
    {
        $warga->delete();
    
        return redirect()->route('wargas.index')
                        ->with('success','warga deleted successfully');
    }
}
