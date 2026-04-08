@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6">

    <h2 class="text-2xl font-semibold mb-4">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST"
          class="bg-white shadow-lg rounded-lg p-6 space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Name
            </label>
            <input type="text" name="nama"
                value="{{ $product->nama }}"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Price
            </label>
            <input type="number" name="harga"
                value="{{ $product->harga }}"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        </div>

        <div class="flex gap-2 pt-2">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow">
                Update
            </button>

            <a href="{{ route('products.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg shadow">
                Cancel
            </a>
        </div>

    </form>

</div>
@endsection