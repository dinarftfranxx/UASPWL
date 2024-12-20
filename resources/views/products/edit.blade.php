<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #ffc107;
        }
        .form-container {
            width: 50%;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        textarea {
            resize: none;
            height: 100px;
        }
        button {
            background-color: #ffc107;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #e0a800;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #ffc107;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Edit Produk</h1>
    <div class="form-container">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name">Nama Produk</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>

            <label for="description">Deskripsi Produk</label>
            <textarea id="description" name="description" required>{{ $product->description }}</textarea>

            <label for="price">Harga</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" step="0.01" required>

            <label for="stock">Stok</label>
            <input type="number" id="stock" name="stock" value="{{ $product->stock }}" required>

            <button type="submit">Simpan</button>
        </form>
        <a href="{{ route('products.index') }}" class="back-link">Kembali ke Daftar Produk</a>
    </div>
</body>
</html>
