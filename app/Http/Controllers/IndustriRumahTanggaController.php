<?php

namespace App\Http\Controllers;

use App\Models\IndustriRumahTangga;
use Illuminate\Http\Request;
use App\Exports\IndustriRumahTanggaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class IndustriRumahTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataSort($id = null)
    {
        if(isset(Auth::user()->desa_id)){
            if($id != null){
                return $data = IndustriRumahTangga::join('users','users.id','=','is_user_id')
                ->where('desa_id', Auth::user()->desa_id)
                ->where('industri_rumah_tanggas.id_industri_rumah_tangga', $id)
                ->select('industri_rumah_tanggas.*', 'users.desa_id')
                ->get();
            }else{
                return $data = IndustriRumahTangga::join('users','users.id','=','is_user_id')
                ->where('desa_id', Auth::user()->desa_id)
                ->select('industri_rumah_tanggas.*', 'users.desa_id')
                ->get();
            }
        }else{
            return $data = IndustriRumahTangga::all();
        }
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->dataSort();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '
                        <form onsubmit="return confirm(\'Apakah anda yakin ingin menghapus '.$row->jenis_buku.' ?\');"  action="industriRumahTanggas/'.$row->id_industri_rumah_tangga.'" method="POST">

                            <a class="btn btn-primary" href="industriRumahTanggas/'.$row->id_industri_rumah_tangga.'/edit" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            </a>

                            '.csrf_field().'
                            '.method_field("DELETE").'

                            <button type="submit" class="btn btn-danger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </form>
                        ';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('industriRumahTanggas.index');
    }

    public function export_excel()
	{
        $name = 'Laporan Industri Rumah Tangga '.date('Y-m-d',time());
		return Excel::download(new IndustriRumahTanggaExport, $name . '.xlsx');
	}

    public function pdf()
    {
        $industriRumahTangga = IndustriRumahTangga::all();
        $pdf = PDF::loadview('industriRumahTanggas.laporan_pdf', ['industriRumahTangga' => $industriRumahTangga]);

        return $pdf->download('industri_rumah_tangga.pdf');
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
        $request["is_user_id"] = Auth::user()->id;

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
