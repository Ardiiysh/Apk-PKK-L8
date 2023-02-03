<?php

namespace App\Http\Controllers;

use App\Models\DataIndustri;
use App\Models\Dasawisma;
use Illuminate\Http\Request;
use App\Exports\DataIndustriExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class DataIndustriController extends Controller
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
                return $data = DataIndustri::join('users','users.id','=','is_user_id')
                ->where('desa_id', Auth::user()->desa_id)
                ->where('data_industris.id_data_industri', $id)
                ->select('data_industris.*', 'users.desa_id')
                ->get();
            }else{
                return $data = DataIndustri::join('users','users.id','=','is_user_id')
                ->where('desa_id', Auth::user()->desa_id)
                ->select('data_industris.*', 'users.desa_id')
                ->get();
            }
        }else{
            return $data = DataIndustri::all();
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
                        <form onsubmit="return confirm(\'Apakah anda yakin ingin menghapus '.$row->id_dasawisma.' ?\');"  action="dataIndustris/'.$row->id_data_industri.'" method="POST">

                            <a class="btn btn-primary" href="dataIndustris/'.$row->id_data_industri.'/edit" >
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
        $dasawisma = Dasawisma::all();
        return view('dataIndustris.index',compact('dasawisma',));
    }

    public function export_excel()
	{
        $name = 'Laporan Data Industri '.date('Y-m-d', time());
		return Excel::download(new DataIndustriExport, $name . '.xlsx');
	}

    public function export_pdf()
    {
        $dataIndustri = DataIndustri::all();
        $pdf = PDF::loadview('dataIndustris.laporan_pdf', ['dataIndustri' => $dataIndustri]);

        return $pdf->download('data_industri.pdf');
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
        $request["is_user_id"] = Auth::user()->id;

        $request->validate([
            // 'id_dasawisma' => 'required',
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
        $dasawisma = Dasawisma::all();
        return view('dataIndustris.edit', compact('dataIndustri','dasawisma'));

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
            // 'id_dasawisma' => 'required',
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
