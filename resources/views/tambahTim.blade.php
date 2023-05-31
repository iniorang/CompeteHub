@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <h2 class="text-center">Formulir Tambah Peserta</h2>
        <div class="container d-flex justify-content-center">
            <form action="/tim/store" method="post">
                {{ csrf_field() }}
                <label>Nama</label><br>
                <input type="text" name="nama" required="required"><br>
                <label>Alamat</label><br>
                <input type="text" name="alamat" required="required"><br>
                <label>Nomor Telepon</label><br>
                <input type="number" name="telp" required="required"><br>
                <label>Tim</label><br>
                <input type="text" name="tim"><br>
                <button class="btn btn-dark my-3">Buat Peserta Baru</button>
            </form>
        </div>
</body>
@endsection