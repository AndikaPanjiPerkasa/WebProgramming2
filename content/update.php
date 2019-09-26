<?php 

include './koneksi.php';
$view = "SELECT * FROM crud WHERE id = '$_GET[id]'";
$sql = mysqli_query($conn,$view);
$data = mysqli_fetch_assoc($sql);

 ?>

<div class="container">
		<a class="text-h2"><center>CRUD ANDIKA PANJI PERKASA</center></a>
	</div>
	<br>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group col-md-6">
			<label for="inputNama">Nama</label>
			<input type="text" class="form-control" id="inputNama" name="nama" autocomplete="off" value="<?php echo $data['nama']; ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="inputNama">Username</label>
			<input type="text" class="form-control" id="inputNama" name="username" autocomplete="off" value="<?php echo $data['username']; ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="inputNama">Password</label>
			<input type="password" class="form-control" id="inputNama" name="password" autocomplete="off" value="<?php echo $data['password']; ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="inputNama">Email</label>
			<input type="text" class="form-control" id="inputNama" name="email" autocomplete="off" value="<?php echo $data['email']; ?>" required>
		</div>

		<div class="form-group col-md-6">
			<button type="simpan" class="btn btn-success" name="simpan">Simpan</button>
		</div>
	</form>
	<?php 
	

	if(isset($_POST['simpan']))
		{
			$nama = $_POST['nama'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
				

		$query = "UPDATE crud SET nama = '$nama', username = '$username', password = '$password', email = '$email' WHERE id = '$_GET[id]'";


		$save = mysqli_query($conn,$query);

			if($save){
				echo "<script>alert('Data Berhasil Tersimpan');</script>";
				echo "<script>var timer = setTimeout(function()
	        			{ window.location= '?page=read'}, 500)</script>";
			}else{
				echo "<script>alert('Data Gagal Tersimpan');</script>";
			}
		}

 ?>