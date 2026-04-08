@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">

    <h2 class="text-xl font-semibold mb-4">Tambah Produk</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="block mb-1">Nama</label>
            <input type="text" name="nama"
                class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Harga</label>
            <input type="number" name="harga"
                class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Stok</label>
            <input type="number" name="stok"
                class="w-full border rounded px-3 py-2" value="0">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Kategori</label>
            <select name="category_id"
                class="w-full border rounded px-3 py-2" required>

                <option value="">-- Pilih Kategori --</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="flex gap-2">
            <button type="submit"
                class="bg-green-500 text-white px-4 py-2 rounded">
                Simpan
            </button>

            <a href="{{ route('products.index') }}"
                class="bg-gray-500 text-white px-4 py-2 rounded">
                Kembali
            </a>
        </div>

    </form>

</div>
@endsection