<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Pendidikan
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<div class="form-group">
							<label for="pend_id">ID Pendidikan</label>
							<input type="text" name="pend_id" class="form-control" id="pend_id">
							<small class="form-text text-danger"><?= form_error('pend_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="profile_id">ID Profile</label>
							<input type="number" name="profile_id" class="form-control" id="profile_id">
							<small class="form-text text-danger"><?= form_error('profile_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="jenjang">Jenjang</label>
							<select class="form-control" id="jenjang" name="jenjang">
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA</option>
								<option value="D3">D3</option>
								<option value="S1">S1</option>
							</select>
						</div>
						<div class="form-group">
							<label for="nama_sekolah">Nama Sekolah</label>
							<input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah">
							<small class="form-text text-danger"><?= form_error('nama_sekolah'); ?></small>
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
