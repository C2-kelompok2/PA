<?php include 'protect.php'; ?>
<h2>Add Restaurant</h2>

<form role="form" method="POST">
	<div class="form-group">
		<label>Restaurant</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Address</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>Call</label>
		<input type="number" class="form-control" name="telepon">
	</div>
	<button class="btn btn-primary" name="submit">Save</button>
</form>
<?php 
	if (isset($_POST['submit'])) {
		$query=$conn->query("INSERT INTO warung VALUES ('','$_POST[nama]','$_POST[alamat]',$_POST[telepon])");
		echo "<br><div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=warung'>";
	}
?>