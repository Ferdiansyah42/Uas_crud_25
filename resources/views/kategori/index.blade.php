<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi manajemen</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>manajemen data</h1>
        <div class="nav">
            <ul>
                <li><a href="/kategori">Kategori</a></li>
                <li><a href="/penerbit">penerbit</a></li>
                <li><a href="/buku">buku</a></li>
            </ul>
        </div>
        <h3>kategori</h3>
        <a href="{{ route('kategori.create') }}" class="tombol">tambah</a>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
    </body>
 </html>   