<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Edit Data Pendidikan
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<input type="hidden" name="pend_id" value="<?= $pendidikan['pend_id'];?>">
						<div class="form-group">
							<label for="pend_id">ID Pendidikan</label>
							<input type="text" name="pend_id" class="form-control" id="pend_id"
								value="<?= $pendidikan['pend_id']?>">
							<small class="form-text text-danger"><?= form_error('pend_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="profile_id">ID Profile Pegawai</label>
							<input type="number" name="profile_id" class="form-control" id="profile_id"
								value="<?= $pendidikan['profile_id']?>">
							<small class="form-text text-danger"><?= form_error('profile_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="jenjang">Jenjang</label>
							<select class="form-control" id="jenjang" name="jenjang">
								<?php foreach($jenjang as $jj) : ?>
								<?php if($jj == $pendidikan['jenjang']) : ?>
								<option value="<?= $jj; ?>" selected><?= $jj; ?></option>
								<?php else : ?>
									<option value="<?= $jj; ?>"><?= $jj; ?></option>
								<?php endif;?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="nama_sekolah">Nama Sekolah</label>
							<input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah"
								value="<?= $pendidikan['nama_sekolah']?>">
							<small class="form-text text-danger"><?= form_error('nama_sekolah'); ?></small>
						</div>

						<div class="row mt-3">
							<div class="col md-6">
								<button type="submit" name="edit" class="btn btn-primary" style="float:right">Edit
									Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>
