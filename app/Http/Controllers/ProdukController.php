<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        Produk::create($request->all());
        return redirect('/produk');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->update($request->all());
        return redirect('/produk');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return redirect('/produk');
        }

        $produk->delete();

        return redirect('/produk');
    }
}