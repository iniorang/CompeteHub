@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <h2 class="text-center">Formulir Ubah Kompetisi</h2>
        <div class="container d-flex justify-content-center">
            <?php foreach ($kompetisi as $k) { ?>
                <form action="/kompetisi/update" method="post">
                    <input type="hidden" name="id" value="<?= $k->id ?>">
                    {{ csrf_field() }}
                    <label>Nama</label><br>
                    <input type="text" name="nama" value="<?= $k->nama ?>"><br>
                    <button class="btn btn-dark my-3">Ubah Kompetisi</button>
                </form>
            <?php } ?>
        </div>
</body>
@endsection