<div class="container mt-3">
	<div class="row">
		<div class="col-sm-12">
			<?php
				Flasher::Message();
			?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<button type="button" class="btn btn-primary btnTambahData" data-toggle="modal" data-target="#exampleModal" data-zurl="<?= BASEURL; ?>">
				Tambah Mahasiswa
			</button>
			<h1>Data Mahasiswa</h1>
			<table class="table table-stripped">
				<thead>
					<tr>
						<th scope="col">Nama</th>
						<th scope="col" width="200px">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['mhs'] as $mhs) :?>
						<tr>
							<td><?= $mhs['nama'];?></td>
							<td>
								<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill">Detail</a>

								<a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $mhs['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
								<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>		
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?= BASEURL; ?>/mahasiswa/simpanmahasiswa" method="POST" enctype="multipart/form-data">
      		<input type="hidden" name="id" id="id">
					<div class="form-group">
	        	<label for="nim">Nim</label>
	        	<input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan nim" required="true">
	        </div>
	        <div class="form-group">
	        	<label for="nama">Nama</label>
	        	<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" required="true">
	        </div>
	        <div class="form-group">
	        	<label for="jurusan">Jurusan</label>
	        	<select name="jurusan" id="jurusan" class="form-control" required="true">
	        		<option>-- Pilih Jurusan--</option>
	        		<option value="Teknik Informatika">Teknik Informatika</option>
	        		<option value="Teknik Elektro">Teknik Elektro</option>
	        		<option value="Teknik Mesin">Teknik Mesin</option>
	        		<option value="Teknik Industri">Teknik Industri</option>
	        	</select>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      	</form>
    </div>
  </div>
</div>