@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Daftar Produk</h3>
    <a href="/produk/create" class="btn btn-primary">+ Tambah Produk</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th width="150">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>Rp {{ number_format($p->harga) }}</td>
            <td>
                <a href="/produk/{{ $p->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                <form action="/produk/{{ $p->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection