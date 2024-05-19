<?php
// panggil koneksi ke database
require_once 'config/database.php';

// ambil data dari database
$query = "SELECT * FROM penghuni_kost ORDER BY nama_penghuni ASC LIMIT 0, 10";
$sql = mysqli_query($db, $query);
$counter = 1;
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<title>Aplikasi Kost Keeper - Manajemen Kost</title>
	<style>
		.jumbotron {
			background: linear-gradient(40deg, #64B5F6, #8E24AA);
			color: #ffffff;
			text-align: center;
			padding: 50px 0;
		}

		.jumbotron h1 {
			font-size: 3em;
			font-weight: bold;
		}
	</style>
</head>

<body>
	<div class="jumbotron">
		<h1>Aplikasi Kost Keeper - Manajemen Kost</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="text-center">
					<h3>Data Penghuni Kost</h3>
					<hr>
					<p style="padding:10pt 0pt 0pt 10pt;">
						<a href="pages/tambah_penghuni.php" class="btn btn-xs btn-primary"><span
								class="glyphicon glyphicon-plus"></span> Tambah Penghuni</a>
					</p>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>ID</th>
								<th>Nama Penghuni</th>
								<th>Nomor Kamar</th>
								<th>Tanggal Masuk</th>
								<th>Kontak</th>
								<th>Catatan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($sql as $penghuni): ?>
								<tr>
									<td><?php echo $counter++; ?></td>
									<td><?php echo $penghuni['id']; ?></td>
									<td><?php echo $penghuni['nama_penghuni']; ?></td>
									<td><?php echo $penghuni['nomor_kamar']; ?></td>
									<td><?php echo $penghuni['tanggal_masuk']; ?></td>
									<td><?php echo $penghuni['kontak']; ?></td>
									<td><?php echo $penghuni['catatan']; ?></td>
									<td>
										<a href="pages/edit_penghuni.php?id=<?php echo $penghuni['id']; ?>"
											class="btn btn-xs btn-primary"><span
												class="glyphicon glyphicon-pencil"></span></a>
										<a href="process/hapus_penghuni_proses.php?id=<?php echo $penghuni['id']; ?>"
											class="btn btn-xs btn-danger"><span
												class="glyphicon glyphicon-trash"></span></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>

</html>