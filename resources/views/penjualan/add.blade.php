@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Penjualan</h3>
        <form action="{{ url('/penjualan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">No Penjualan</label>
                <input type="text" class="form-control" name="no_pnjl">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" name="nama_pmbl">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Ikan</label>
                <select name="nama_ikan" class="form-select">
                    <option value="">-- Pilih Ikan --</option>
                    <option value="Ikan Chana Maru">Ikan Chana Maru</option>
                    <option value="Ikan Chana Auranti">Ikan Chana Auranti</option>
                    <option value="Ikan Chana Pulchra">Ikan Chana Pulchra</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection