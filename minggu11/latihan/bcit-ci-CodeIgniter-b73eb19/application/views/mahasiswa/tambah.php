<div class="container mt-3">
	<form action="<?= BASEURL; ?>/mahasiswa/simpanmahasiswa" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" name="nim" placeholder="NIM">
		<input class="form-control form-control-lg mt-2" type="text" name="nama" placeholder="Nama">
		<input class="form-control form-control-lg mt-2" type="text" name="jurusan" placeholder="Jurusan">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>