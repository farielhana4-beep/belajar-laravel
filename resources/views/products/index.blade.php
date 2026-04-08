@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Product List</h2>

        <a href="{{ route('products.create') }}"
           class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow">
           + Tambah Produk
        </a>
    </div>

    {{-- SEARCH + FILTER --}}
    <form method="GET" class="flex gap-2 mb-4">
        <input 
            type="text" 
            name="search"
            placeholder="Cari produk..."
            class="border rounded-lg px-3 py-2 w-64"
            value="{{ request('search') }}"
        >

        <select name="category" class="border rounded-lg px-3 py-2">
            <option value="">Semua Kategori</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">
            Filter
        </button>
    </form>


    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left p-3">Nama</th>
                    <th class="text-left p-3">Kategori</th>
                    <th class="text-left p-3">Harga</th>
                    <th class="text-left p-3">Stok</th>
                    <th class="text-left p-3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $item)
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-3 font-medium">{{ $item->nama }}</td>

                    <td class="p-3">
                        <span class="px-2 py-1 text-xs rounded-full
                        @if($item->category->name == 'Hardware')
                            bg-blue-100 text-blue-700
                        @elseif($item->category->name == 'Aksesoris')
                            bg-green-100 text-green-700
                        @else
                            bg-gray-100 text-gray-700
                        @endif
                        ">
                            {{ $item->category->name }}
                        </span>
                    </td>

                    <td class="p-3">
                        Rp {{ number_format($item->harga) }}
                    </td>

                    <td class="p-3">
                        <span class="px-2 py-1 bg-gray-100 rounded">
                            {{ $item->stok }}
                        </span>
                    </td>

                    <td class="p-3 flex gap-2">

                        <a href="{{ route('products.edit', $item->id) }}"
                           class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                           Edit
                        </a>

                        <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection