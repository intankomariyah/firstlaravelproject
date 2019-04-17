<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css)}}">
</head>
<body>
	<div class="container">
	<br />
	@if (\Session::has('success'))
	<div class="alert alert-success">
		<p>{{ \Session::get('succes')}}</p>
	</div><br />
	@endif
	<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Judul Buku</th>
			<th>Penerbit Buku</th>
			<th>Tahun Terbit Buku</th>
			<th>Pengarang Buku</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		
		@foreach($books as $book)
		<tr>
			<td>{{$book{'id'}}}</td>
			<td>{{$book{'judul'}}}</td>
			<td>{{$book{'penerbit'}}}</td>
			<td>{{$book{'tahun_terbit'}}}</td>
			<td>{{$book{'pengarang'}}}</td>

			<td><a href="{{action('BookController@edit', $book{'id'})}}" class="btn btn-warning">Edit</a></td>
			<td>
				<form action="{{action('BookController@destroy', $book{'id'})}}" method="post">
					@csrf
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	</div>
</body>
</html>