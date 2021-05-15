<?php
include('library.php');
$lib = new Library();
if (isset($_POST['tombol_tambah'])) {
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $add_status = $lib->add_data($nama_siswa, $kelas, $alamat);
    if ($add_status) {
        header('Location: index.php');
    }
}
?>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Siswa</h3>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_siswa" class="form-control" id="nama_siswa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kelas" class="form-control" id="kelas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat" id="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>