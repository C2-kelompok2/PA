<?php include 'protect.php'; ?>
<h2>Data Restaurant</h2>

<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Restoran</th>
				<th>Restoran</th>
				<th>Alamat</th>
				<th>Telp</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			<?php $ambil=$conn->query("SELECT * FROM warung"); ?>
			<?php while ($data=$ambil->fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id_warung']; ?></td>
					<td><?php echo $data['nama_warung']; ?></td>
					<td><?php echo $data['alamat_warung']; ?></td>
					<td><?php echo $data['telepon_warung']; ?></td>
					<td>	
						<a href="index.php?halaman=ubahwarung&id=<?php echo $data['id_warung']; ?>" class="btn btn-warning">Change</a>
					</td>
				</tr>
				<?php
			} ?>
		</tbody>
	</table>	
</div>
<a href="index.php?halaman=tambahwarung" class="btn btn-primary">Add Restaurant</a>