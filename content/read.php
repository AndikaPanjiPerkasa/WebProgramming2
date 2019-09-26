<?php 

include './koneksi.php';
$read = mysqli_query($conn, "SELECT * FROM crud");
$mulai = 0;
$no    =$mulai+1;
 ?>

<div class="container">
	<a class="text-h2"><center>CRUD ANDIKA PANJI PERKASA</center></a>
		<a href="?page=create"><button type="submit" class="btn btn-success" name="submit">Tambah</button></a><br>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>

			<?php while ($data = mysqli_fetch_array($read)) { ?>
			
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['password']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><a href="?page=update&id=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-success">Edit</button></a> <a href="?page=delete&id=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a></td>
			</tr>

			<?php } ?>

		</tbody>
	</table>
</div>