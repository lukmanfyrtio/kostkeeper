<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
		<title>Tambah Penghuni Kost</title>
	</head>
	<body>
		<div class="container-fluid" style="background:linear-gradient(40deg, #90CAF9, #673AB7);">
			<div class="row" style="height:100vh;">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" style="margin-top:10%;">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="text-center">Tambah Penghuni Kost</h3><hr>
							<form role="form" action="../process/tambah_penghuni_proses.php" method="post">
								<div class="form-group">
									<label for="nama_penghuni">Nama Penghuni</label>
									<input type="text" name="nama_penghuni" class="form-control" id="nama_penghuni">
								</div>
								<div class="form-group">
									<label for="nomor_kamar">Nomor Kamar</label>
									<input type="text" name="nomor_kamar" class="form-control" id="nomor_kamar">
								</div>
								<div class="form-group">
									<label for="tanggal_masuk">Tanggal Masuk</label>
									<input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk">
								</div>
								<div class="form-group">
									<label for="kontak">Kontak</label>
									<input type="text" name="kontak" class="form-control" id="kontak">
								</div>
								<div class="form-group">
									<label for="catatan">Catatan</label>
									<textarea name="catatan" class="form-control" id="catatan"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" name="selesai" class="btn btn-lg btn-success" style="width:49%;"><span class="glyphicon glyphicon-ok-sign"></span> Selesai</button>
									<a href="../index.php" class="btn btn-lg btn-danger" style="width:49%;"><span class="glyphicon glyphicon-remove-sign"></span> Kembali</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
