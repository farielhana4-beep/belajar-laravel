@extends('layouts.app')

@section('content')

<h3>Tambah Produk</h3>

<form action="/produk" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="/produk" class="btn btn-secondary">Kembali</a>
</form>

@endsection