@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <h2 class="text-center">Formulir Tambah Peserta</h2>
        <div class="container d-flex justify-content-center">
            <?php foreach ($peserta as $p) { ?>
                <form action="/peserta/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="<?= $p->id ?>">
                    <label>Nama</label><br>
                    <input type="text" name="nama" required="required" value="<?= $p->nama ?>"><br>
                    <label>Alamat</label><br>
                    <input type="text" name="alamat" required="required" value="<?= $p->alamat ?>"><br>
                    <label>Nomor Telepon</label><br>
                    <input type="number" name="telp" required="required" value="<?= $p->telp ?>"><br>
                    <label>Tim</label><br>
                    <input type="text" name="tim" <?= $p->tim ?>><br>
                    <button class="btn btn-dark my-3">Ubah Data</button>
                </form>
            <?php } ?>
        </div>
</body>
@endsection