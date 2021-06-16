  <div class="container">
		<div class="card">
			<div class="card-header">Create Siswa</div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>siswa/save">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>

				<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option value="pria">Pria</option>
						<option value="wanita">Wanita</option>
					</select>
				</div>

				<div class="form-group">
					<label for="tempat_lahir">Tempat Lahir</label>
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
				</div>

				<div class="form-group">
					<label for="tgl_lahir">Tanggal Lahir</label>
					<input type="text" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir">
				</div>

				<div class="form-group">
					<label for="no_telp">No Telp</label>
					<input type="number" class="form-control" id="no_telp" name="no_telp">
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>


