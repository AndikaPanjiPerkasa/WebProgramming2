<?php 

include './koneksi.php';

 ?>


<div class="container">
		<a class="text-h2"><center>CRUD ANDIKA PANJI PERKASA</center></a>
	</div>
	<br>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group col-md-6">
			<label for="inputNama">Nama</label>
			<input type="text" class="form-control" id="inputNama" name="nama" autocomplete="off" placeholder="Masukkan Nama" required>
		</div>

		<div class="form-group col-md-6">
			<label for="inputNama">Username</label>
			<input type="text" class="form-control" id="inputNama" name="username" autocomplete="off" placeholder="Masukkan Username" required>
		</div>

		<div class="form-group col-md-6">
			<label for="inputNama">Password</label>
			<input type="password" class="form-control" id="inputNama" name="password" autocomplete="off" placeholder="***********" required>
		</div>

		<div class="form-group col-md-6">
			<label for="inputNama">Email</label>
			<input type="text" class="form-control" id="inputNama" name="email" autocomplete="off" placeholder="Masukkan Email" required>
		</div>

		<div class="form-group col-md-6">
			<button type="simpan" class="btn btn-success" name="simpan">Tambah</button>
		</div>
	</form>
	<?php 
	

	if(isset($_POST['simpan']))
		{
			$nama = $_POST['nama'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
				

		$query = "INSERT INTO crud (nama, username, password, email) VALUES('$nama', '$username', '$password', '$email')";


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