<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Kontak
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<div class="form-group">
							<label for="kontak_id">ID Kontak</label>
							<input type="text" name="kontak_id" class="form-control" id="kontak_id">
							<small class="form-text text-danger"><?= form_error('kontak_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="profile_id">ID Profile Pegawai</label>
							<input type="number" name="profile_id" class="form-control" id="profile_id">
							<small class="form-text text-danger"><?= form_error('profile_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="no_telp">Nomor Telepon</label>
							<input type="text" name="no_telp" class="form-control" id="no_telp">
							<small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
						</div>
						<div class="form-group">
							<label for="instagram">Username Instagram</label>
							<input type="text" name="instagram" class="form-control" id="instagram">
							<small class="form-text text-danger"><?= form_error('instagram'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control" id="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>

						<div class="row mt-3">
							<div class="col md-6">
								<button type="submit" name="tambah" class="btn btn-primary" style="float:right">Tambah Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>
