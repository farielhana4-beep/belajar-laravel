@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product List</h2>

    <a href="{{ route('products.create') }}">+ Add Product</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th width="150">Action</th>
        </tr>

        @foreach ($product as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>Rp {{ number_format($item->harga) }}</td>
            <td>
                <a href="{{ route('products.edit', $item->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</div>
@endsection