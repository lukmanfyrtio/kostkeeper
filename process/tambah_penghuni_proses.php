<?php

// panggil koneksi ke database
require_once '../config/database.php';

if (isset($_POST['selesai'])) {
	
	// ambil data dari tambah_penghuni.php
	$nama_penghuni = $_POST['nama_penghuni'];
	$nomor_kamar = $_POST['nomor_kamar'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	$kontak = $_POST['kontak'];
	$catatan = $_POST['catatan'];

	// Validasi bahwa semua field diisi
    if (empty($nama_penghuni) || empty($nomor_kamar) || empty($tanggal_masuk) || empty($kontak)) {
        echo "Semua field harus diisi!";
        exit;
    }
	
	// masukkan data ke database
	$query = "INSERT INTO penghuni_kost (nama_penghuni, nomor_kamar, tanggal_masuk, kontak, catatan) 
	          VALUES ('$nama_penghuni', '$nomor_kamar', '$tanggal_masuk', '$kontak', '$catatan')";
	$sql = mysqli_query($db, $query);
	
	if ($sql) {
		header('Location: ../index.php');
	} else {
		echo "Gagal input data: " . mysqli_error($db);
	}
	
}

?>
