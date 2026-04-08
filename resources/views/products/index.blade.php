@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6">

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Product List</h2>

        <a href="{{ route('products.create') }}"
           class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow">
           + Tambah Produk
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left p-3">Name</th>
                    <th class="text-left p-3">Price</th>
                    <th class="text-left p-3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($product as $item)
                <tr class="border-t">
                    <td class="p-3">{{ $item->nama }}</td>
                    <td class="p-3">Rp {{ number_format($item->harga) }}</td>
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