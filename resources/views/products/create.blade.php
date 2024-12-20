<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #007bff;
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
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #0056b3;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Tambah Produk</h1>
    <div class="form-container">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <label for="name">Nama Produk</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama produk" required>

            <label for="description">Deskripsi Produk</label>
            <textarea id="description" name="description" placeholder="Masukkan deskripsi produk" required></textarea>

            <label for="price">Harga</label>
            <input type="number" id="price" name="price" step="0.01" placeholder="Masukkan harga produk" required>

            <label for="stock">Stok</label>
            <input type="number" id="stock" name="stock" placeholder="Masukkan jumlah stok" required>

            <button type="submit">Simpan</button>
        </form>
        <a href="{{ route('products.index') }}" class="back-link">Kembali ke Daftar Produk</a>
    </div>
</body>
</html>
