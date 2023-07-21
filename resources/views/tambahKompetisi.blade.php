@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <h2 class="text-center">Formulir Tambah Kompetisi</h2>
        <div class="container d-flex justify-content-center">
            <form action="/kompetisi/store" method="post">
                {{ csrf_field() }}
                <label>Nama</label><br>
                <input type="text" name="nama"><br>
                <label>Desk</label><br>
                <input type="textarea" name="desk"><br>
                <label>Perlu Team</label><br>
                <select name="teamreq">
                    <option value="0">Tidak Perlu</option>
                    <option value="1">Perlu</option>
                </select>
                <label>Harga Masuk</label><br>
                <input type="number" name="hargadaftar"><br>
                <button class="btn btn-dark my-3">Buat Kompetisi Baru</button>
            </form>
        </div>
</body>
@endsection
