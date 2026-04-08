@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">

    <h2 class="text-xl font-semibold mb-4">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block mb-1">Name</label>
            <input type="text" name="nama"
                value="{{ $product->nama }}"
                class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Price</label>
            <input type="number" name="harga"
                value="{{ $product->harga }}"
                class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-3">
            <label class="block mb-1">Stock</label>
            <input type="number" name="stok"
                value="{{ $product->stok }}"
                class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Category</label>
            <select name="category_id"
                class="w-full border rounded px-3 py-2" required>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="flex gap-2">
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded">
                Update
            </button>

            <a href="{{ route('products.index') }}"
                class="bg-gray-500 text-white px-4 py-2 rounded">
                Cancel
            </a>
        </div>

    </form>

</div>
@endsection