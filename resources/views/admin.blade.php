@extends('layouts.dashboard')

@section('content')
<body>
    <div class="container db-tab ">
        <div class="tab-content mt-2">
            <div class="tab-pane active" id="peserta">
                <div class="container">
                    <a href="/peserta/tambah"><button class="btn btn-dark my-3">Buat Peserta Baru</button></a>
                    <table class="table table-light table-stripped-columns" style="border: 1; width: 100%; border-spacing: 1; padding: 1">
                        <tr>
                            <th style="width: 5%">No.</th>
                            <th style="25%">Nama</th>
                            <th style="10%">Alamat</th>
                            <th style="10%">Nomor Telepon</th>
                            <th style="50%">Tim</th>
                            <th style="10%">Opsi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($peserta as $p) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $p->nama ?></td>
                                <td><?= $p->alamat ?></td>
                                <td><?= $p->telp ?></td>
                                <td><?= $p->tim ?></td>
                                <td>
                                    <a href="/peserta/edit/<?= $p->id ?>">
                                        <button type="button" class="btn btn-dark">Edit</button>
                                    </a>
                                    <a href="/peserta/hapus/<?= $p->id ?>">
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                        {!! $peserta->links('pagination::bootstrap-5') !!}
                    </table>
                    <div class="text-center mt-3">
                        Halaman:<?= $peserta->currentPage() ?> <br>
                        Jumlah Data:<?= $peserta->total() ?> <br>
                        Data Per Halaman:<?= $peserta->perPage() ?> <br>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="kompetisi">
                <div class="container">
                    <a href="/kompetisi/tambah"><button class="btn btn-dark my-3">Buat Kompetisi Baru</button></a>
                    <table class="table table-light table-stripped-columns" style="border: 1; width: 100%; border-spacing: 1; padding: 1">
                        <tr>
                            <th style="width: 5%">No.</th>
                            <th style="25%">Nama</th>
                            <th style="5%">Opsi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($kompetisi as $k) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $k->nama ?></td>
                                <td>
                                    <a href="/kompetisi/edit/<?= $k->id ?>"> <button type="button" class="btn btn-dark">Edit</button> </a>
                                    <a href="/kompetisi/hapus/<?= $k->id ?>"> <button type="button" class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                        {!! $kompetisi->links('pagination::bootstrap-5') !!}
                    </table>
                    <div class="text-center mt-3">
                        Halaman:<?= $kompetisi->currentPage() ?> <br>
                        Jumlah Data:<?= $kompetisi->total() ?> <br>
                        Data Per Halaman:<?= $kompetisi->perPage() ?> <br>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tim">
                <div class="container">
                    <a href="/kompetisi/tambah"><button class="btn btn-dark my-3">Buat Kompetisi Baru</button></a>
                    <table class="table table-light table-stripped-columns" style="border: 1; width: 100%; border-spacing: 1; padding: 1">
                        <tr>
                            <th style="width: 5%">No.</th>
                            <th style="25%">Nama</th>
                            <th style="5%">Opsi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($tim as $t) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $t->nama ?></td>
                                <td>
                                    <a href="/tim/edit/<?= $t->id ?>"> <button type="button" class="btn btn-dark">Edit</button></a>
                                    <a href="/tim/hapus/<?= $t->id ?>"> <button type="button" class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </table>
                    {!! $tim->links('pagination::bootstrap-5') !!}
                    <div class="text-center mt-3">
                        Halaman:<?= $tim->currentPage() ?> <br>
                        Jumlah Data:<?= $tim->total() ?> <br>
                        Data Per Halaman:<?= $tim->perPage() ?> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection