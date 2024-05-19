<?php // proses edit penghuni

// panggil koneksi ke database
require_once '../config/database.php';

if (isset($_POST['selesai'])) { // di submit atau tidak?
	
	// ambil data dari edit_penghuni.php
	$id = $_GET['id'];
	$nama_penghuni = $_POST['nama_penghuni'];
	$nomor_kamar = $_POST['nomor_kamar'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	$kontak = $_POST['kontak'];
	$catatan = $_POST['catatan'];

	if (empty($nama_penghuni) || empty($nomor_kamar) || empty($tanggal_masuk) || empty($kontak)) {
        echo "Semua field harus diisi!";
        exit;
    }
	
	// perbarui data di database
	$query = "UPDATE penghuni_kost 
	          SET nama_penghuni = '$nama_penghuni', 
	              nomor_kamar = '$nomor_kamar', 
	              tanggal_masuk = '$tanggal_masuk', 
	              kontak = '$kontak', 
	              catatan = '$catatan' 
	          WHERE id = '$id'";
	$sql = mysqli_query($db, $query);
	
	if ($sql) {
		header('Location: ../index.php');
	} else {
		echo "Update data gagal: " . mysqli_error($db);
	}
	
}

?>
