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
                <button class="btn btn-dark my-3">Buat Kompetisi Baru</button>
            </form>
        </div>
</body>
@endsection