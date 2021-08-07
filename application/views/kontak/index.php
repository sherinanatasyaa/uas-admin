<div class="container">

	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data kontak pegawai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>

		</div>
	</div>

	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>kontak/tambah" class="btn btn-primary">Tambah Data Kontak</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Cari Data Kontak..." name="keyword">
					<button class="btn btn-primary" type="submit">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Kontak</h3>
			<?php if( empty($kontak) ) :?>
			<div class="alert alert-danger" role="alert">
				Data kontak tidak ditemukan!
			</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach( $kontak as $kt ) : ?>
				<li class="list-group-item"><?= $kt['kontak_id'];?>
					<a href="<?= base_url(); ?>kontak/hapus/<?= $kt['kontak_id']; ?>" class="badge bg-danger"
						style="float:right" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
					<a href="<?= base_url(); ?>kontak/edit/<?= $kt['kontak_id']; ?>" class="badge bg-warning"
						style="float:right">Edit</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>
