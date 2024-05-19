<?php

// file koneksi ke database

$server = "localhost"; 
$username = "root";
$password = ""; 
$database = "kost_management"; 

// koneksi ke database
@$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
	die("Gagal koneksi ke database : ".mysqli_connect_error());
}
