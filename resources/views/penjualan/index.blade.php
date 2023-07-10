@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Daftar Penjualan Ikan <a href="{{ url('penjualan/create') }}">Tambah Data</a></h3>
    <form class="form" method="get" action="{{ url('penjualan/search') }}">
        <div class="form-group w-100 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>
    <table class="table">
        <tr>
            <th>No Penjualan</th>
            <th>Nama Pembeli</th>
            <th>Nama Ikan</th>
            <th>Harga</th>
            <th>Alamat</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->no_pnjl }}</td>
            <td>{{ $row->nama_pmbl }}</td>
            <td>{{ $row->nama_ikan }}</td>
            <td>{{ $row->harga }}</td>
            <td>{{ $row->alamat }}</td>
            <td><a href="{{ url('penjualan/' . $row->id_ikan . '/edit') }}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{ url('penjualan/' . $row->id_ikan . '/lihat') }}" class="btn btn-info">Lihat</a></td>
            <td>
                <form action="{{ url('penjualan/' . $row->id_ikan) }}" method="POST">
                    <input name="_method" type="hidden" value="DELETE">
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection