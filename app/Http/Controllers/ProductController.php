<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Form edit produk
    public function edit($id)
{
    if ($id != 1) {
        return redirect()->route('products.index')->with('error', 'Anda hanya dapat mengedit produk dengan ID 1.');
    }

    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

// Menyimpan perubahan produk
public function update(Request $request, $id)
{
    if ($id != 1) {
        return redirect()->route('products.index')->with('error', 'Anda hanya dapat memperbarui produk dengan ID 1.');
    }

    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
    ]);

    $product = Product::findOrFail($id);
    $product->update($request->all());

    return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
}

// Menghapus produk
public function destroy($id)
{
    if ($id != 1) {
        return redirect()->route('products.index')->with('error', 'Anda hanya dapat menghapus produk dengan ID 1.');
    }

    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
}

}
