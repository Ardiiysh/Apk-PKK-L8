@php
    $id = auth()->user()->desa_id;
    $desa = App\Models\Desa::where('id', $id)->get();
@endphp

@if (auth()->user()->desa_id) 
<table width="100%">
    <tr>
        <td width="25" align="center"><img src="{{ public_path('img/logopkk.png') }}" width="100%"></td>
        <td width="50" align="center"><h1>Pemberdayaan dan kesejahteraan Keluarga</h1><h1>(PKK)</h1><h2>{{ $desa['0']['nama_desa'] }}</h2><h5>Alamat:{{ $desa['0']['alamat_desa'] }}</h5></td>
        <td width="25" align="center"><img src="{{ public_path('img/logopkk.png') }}" width="100%"></td>
    </tr>
</table>
<hr><width="100" height="75"></hr>
@endif