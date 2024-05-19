<?php 

// panggil koneksi ke database
require_once '../config/database.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	
	// hapus data dari database
	$query = "DELETE FROM penghuni_kost WHERE id = '$id'";
	$sql = mysqli_query($db, $query);
	
	if ($sql) {
		header('Location: ../index.php');
	} else {
		echo "Gagal hapus data: " . mysqli_error($db);
	}
	
}

?>
