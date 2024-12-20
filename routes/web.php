<?php

use App\Models\Product;
use App\Http\Controllers\ProductController;

// Rute untuk produk
Route::resource('products', ProductController::class);

Route::get('/', [ProductController::class, 'index'])->name('products.index');


// Route::get('/add-product', function () {
//     Product::create([
//         'name' => 'Laptop Gaming',
//         'description' => 'Laptop dengan spesifikasi tinggi untuk gaming.',
//         'price' => 15000000,
//         'stock' => 10,
//     ]);
//     return "Produk berhasil ditambahkan!";
// });

// Route::get('/products', function () {
//     $products = Product::all();
//     return view('products.index', compact('products'));
// });

// Route::get('/update-product', function () {
//     $product = Product::find(1); // Produk dengan ID 1
//     if ($product) {
//         $product->update(['stock' => 5]);
//         return "Produk berhasil diperbarui!";
//     }
//     return "Produk tidak ditemukan.";
// });

// Route::get('/delete-product', function () {
//     $product = Product::find(1); // Produk dengan ID 1
//     if ($product) {
//         $product->delete();
//         return "Produk berhasil dihapus!";
//     }
//     return "Produk tidak ditemukan.";
// });
