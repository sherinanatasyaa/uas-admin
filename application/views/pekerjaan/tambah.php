<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Pekerjaan
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<div class="form-group">
							<label for="pkj_id">ID Pekerjaan</label>
							<input type="text" name="pkj_id" class="form-control" id="pkj_id">
							<small class="form-text text-danger"><?= form_error('pkj_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="profile_id">ID Profile</label>
							<input type="number" name="profile_id" class="form-control" id="profile_id">
							<small class="form-text text-danger"><?= form_error('profile_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<select class="form-control" id="jabatan" name="jabatan">
								<option value="SPV">SPV</option>
								<option value="ADMIN">ADMIN</option>
								<option value="SALES">SALES</option>
								<option value="KORLAP">KORLAP</option>
							</select>
						</div>
						<div class="form-group">
							<label for="waktu">Waktu</label>
							<input type="text" name="waktu" class="form-control" id="waktu">
							<small class="form-text text-danger"><?= form_error('waktu'); ?></small>
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
