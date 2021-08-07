<div class="container">

	<div class="row mt-3">
		<div class="col md-6">

			<div class="card">
				<div class="card-header">
					Form Edit Data Pekerjaan
				</div>
				<div class="card-body">

					<form action="" method="POST">
						<input type="hidden" name="pkj_id" value="<?= $pekerjaan['pkj_id'];?>">
						<div class="form-group">
							<label for="pkj_id">ID Pekerjaan</label>
							<input type="text" name="pkj_id" class="form-control" id="pkj_id"
								value="<?= $pekerjaan['pkj_id']?>">
							<small class="form-text text-danger"><?= form_error('pkj_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="profile_id">ID Profile Pegawai</label>
							<input type="number" name="profile_id" class="form-control" id="profile_id"
								value="<?= $pekerjaan['profile_id']?>">
							<small class="form-text text-danger"><?= form_error('profile_id'); ?></small>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<select class="form-control" id="jabatan" name="jabatan">
								<?php foreach($jabatan as $jb) : ?>
								<?php if($jb == $jabatan['jabatan']) : ?>
								<option value="<?= $jb; ?>" selected><?= $jb; ?></option>
								<?php else : ?>
									<option value="<?= $jb; ?>"><?= $jb; ?></option>
								<?php endif;?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="waktu">Waktu</label>
							<input type="text" name="waktu" class="form-control" id="waktu"
								value="<?= $pekerjaan['waktu']?>">
							<small class="form-text text-danger"><?= form_error('waktu'); ?></small>
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
