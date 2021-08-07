<div class="container">

	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Pekerjaan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

		</div>
	</div>

	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>pekerjaan/tambah" class="btn btn-primary">Tambah Data Pekerjaan</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Cari Data Pekerjaan..." name="keyword">
					<button class="btn btn-primary" type="submit">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Pekerjaan</h3>
			<?php if( empty($pekerjaan) ) :?>
			<div class="alert alert-danger" role="alert">
				Data pekerjaan tidak ditemukan!
			</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach( $pekerjaan as $pkj ) : ?>
				<li class="list-group-item"><?= $pkj['pkj_id'];?>
					<a href="<?= base_url(); ?>pekerjaan/hapus/<?= $pkj['pkj_id']; ?>" class="badge bg-danger"
						style="float:right" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
					<a href="<?= base_url(); ?>pekerjaan/edit/<?= $pkj['pkj_id']; ?>" class="badge bg-warning"
						style="float:right">Edit</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>
