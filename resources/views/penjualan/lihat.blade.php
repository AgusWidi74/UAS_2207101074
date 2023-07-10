@extends('layouts.app')
@section('content')
<div class="container"> 
	<h3>Lihat Data Penjualan</h3>
	@csrf
	<table class="table">
		<tr>
			<td>No penjualan</td>
			<td>{{ $row->no_pnjl }}</td>
		</tr>
		<tr>
			<td>Nama Pembeli</td>
			<td>{{ $row->nama_pmbl }}</td>
		</tr>
		<tr>
			<td>Nama Ikan</td>
			<td>{{ $row->nama_ikan }}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>{{ $row->harga }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>{{ $row->alamat }}</td>
		</tr>
		<tr>
			<td colspan="2">
				<a href="{{ url('penjualan') }}" class="btn btn-danger">Kembali</a>
			</td>
		</tr>
	</table>
</div>
@endsection