@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <h2 class="text-center">Formulir Tambah Tim</h2>
        <div class="container d-flex justify-content-center">
            <?php foreach ($tim as $t) { ?>
                <form action="/tim/update" method="post">
                    <input type="hidden" name="id" value="<?= $t->id ?>">
                    {{ csrf_field() }}
                    <label>Nama</label><br>
                    <input type="text" name="nama" value="<?= $t->nama ?>"><br>
                    <button class="btn btn-dark my-3">Ubah Tim</button>
                </form>
            <?php } ?>
        </div>
</body>
@endsection