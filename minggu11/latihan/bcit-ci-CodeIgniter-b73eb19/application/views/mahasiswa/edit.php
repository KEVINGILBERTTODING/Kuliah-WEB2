<div class="container mt-3">
	<form action="<?= BASEURL; ?>/mahasiswa/updateMahasiswa" method="POST" enctype="multipart/form-data">
		<input class="form-control form-control-lg mt-2" type="text" readonly="true" name="nim" placeholder="NIM" value="<?= $data['mhs']['nim']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="nama" placeholder="Nama" value="<?= $data['mhs']['nama']; ?>">
		<input class="form-control form-control-lg mt-2" type="text" name="jurusan" placeholder="Jurusan" value="<?= $data['mhs']['jurusan']; ?>">
		<input type="submit" value="simpan" class="btn btn-success mt-2">
		<a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary mt-2">Kembali</a>
	</form>
</div>