<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BUKU PERPUS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<h2>Tambah Buku Baru</h2>
		<form method="post" action="{{url('books')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="judul">Judul buku:</label>
					<input type="text" class="form-control" name="judul">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="penerbit">Penerbit buku:</label>
					<input type="text" class="form-control" name="penerbit">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="tahun_terbit">Tahun terbit buku:</label>
					<input type="text" class="form-control" name="tahun_terbit">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="pengarang">Pengarang buku:</label>
					<input type="text" class="form-control" name="pengarang">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4" style="margin-top: 60px">
					<button type="submit" class="btn btn-success">Submit</button> 
				</div>
			</div>
		</form>
	</div>
</body>
</html>