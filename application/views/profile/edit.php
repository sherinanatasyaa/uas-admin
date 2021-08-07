<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Edit Data Pegawai
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<input type="hidden" name="profile_id" value="<?= $profile['profile_id'];?>">
						<div class="form-group">
							<label for="profile_id">ID Pegawai</label>
							<input type="number" name="profile_id" class="form-control" id="profile_id"
								value="<?= $profile['profile_id']?>">
							<small class="form-text text-danger"><?= form_error('profile_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama Pegawai</label>
							<input type="text" name="nama" class="form-control" id="nama"
								value="<?= $profile['nama']?>">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="tgl_lahir">Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir"
								value="<?= $profile['tgl_lahir']?>">
							<small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
						</div>
						<div class="form-group">
							<label for="jk">Jenis Kelamin</label>
							<select class="form-control" id="jk" name="jk">
								<option value="Perempuan">Perempuan</option>
								<option value="Laki-Laki">Laki-Laki</option>
							</select>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" class="form-control" id="alamat"
								value="<?= $profile['alamat']?>">
							<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
						</div>

						<div class="row mt-3">
							<div class="col md-6">
								<button type="submit" name="edit" class="btn btn-primary" style="float:right">Edit Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>
