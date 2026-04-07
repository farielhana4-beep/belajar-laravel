<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProductController extends Controller
{
   public function index()
{
    $product = Produk::all();
    return view('products.index', compact('product'));
}

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Produk::create($request->all());
        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Produk::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Produk::find($id);
        $product->update($request->all());
        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = Produk::find($id);
        $product->delete();
        return redirect('/products');
    }
}