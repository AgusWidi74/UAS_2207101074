@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Penjualan</h3>
    <form action="{{ url('/penjualan/' . $row->id_ikan) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <table class="table">
            <tr>
                <td>No Penjualan</td>
                <td><input type="text" name="no_pnjl" value="{{ $row->no_pnjl }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama_pmbl" value="{{ $row->nama_pmbl }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Ikan</td>
                <td>
                    <select name="nama_ikan" class="form-select">
                        <option value="">-- Pilih Ikan --</option>
                        <option value="Ikan Chana Maru">Ikan Chana Maru</option>
                        <option value="Ikan Chana Auranti">Ikan Chana Auranti</option>
                        <option value="Ikan Chana Pulchra">Ikan Chana Pulchra</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="{{ $row->harga }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="{{ $row->alamat }}" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="UPDATE" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>

@endsection