@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-semibold mb-6">Tambah Produk</h2>

<form action="{{ route('products.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="block text-sm font-medium mb-1">Nama</label>
        <input type="text" name="nama"
            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400">
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Harga</label>
        <input type="number" name="harga"
            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400">
    </div>

    <div class="flex gap-2 pt-3">
        <button type="submit"
            class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow">
            Simpan
        </button>

        <a href="{{ route('products.index') }}"
            class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg shadow">
            Kembali
        </a>
    </div>

</form>

@endsection