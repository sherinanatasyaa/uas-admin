<div class="container">

	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Pegawai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

		</div>
	</div>

	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>profile/tambah" class="btn btn-primary">Tambah Data Pegawai</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Cari Data Pegawai..." name="keyword">
					<button class="btn btn-primary" type="submit">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-10">
			<h3>Daftar Pegawai</h3>
			<?php if( empty($profile) ) :?>
			<div class="alert alert-danger" role="alert">
				Data pegawai tidak ditemukan!
			</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach( $profile as $pro ) : ?>
				<li class="list-group-item"><?= $pro['nama'];?>
					<a href="<?= base_url(); ?>profile/hapus/<?= $pro['profile_id']; ?>" class="badge bg-danger"
						style="float:right" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
					<a href="<?= base_url(); ?>profile/edit/<?= $pro['profile_id']; ?>" class="badge bg-warning"
						style="float:right">Edit</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>
