<?php
	$content = (isset($_GET["page"])) ? $_GET["page"] : "" ;		
		switch ($content) {
 			case 'create':
 				echo"<title>TAMBAH DATA</title>";
 				require 'content/create.php';
 				break;
 			case 'update':
 				echo"<title>UBAH DATA</title>";
 				require 'content/update.php';
 				break;
 			case 'delete':
 				echo"<title>HAPUS DATA</title>";
 				require 'content/delete.php';
 				break;
 			default:
 				echo"<title>CRUD ANDIKA PANJI PERKASA</title>";
 				require 'content/read.php';
 				break;
 		}
 ?>