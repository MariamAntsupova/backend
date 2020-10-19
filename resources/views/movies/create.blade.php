<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<form action="adminindex" method="POST">
		<table class="table">
				<tr>
					<th>N</th>
					<th>IMDB</th>
					<th>description</th>
					<th>genre_id</th>
				</tr>
				@foreach ($movies as $movie)
					<tr>
						<td>{{ ++$loop->index }}</td>
						<td>{{ $movie->title }}</td>
						<td>
							<a href="{{ route('admincreateshow',["id"=>$movie->id]) }}" class="btn btn-success">create</a>
							<form action="{{ route('admindelete') }}" method="POST">
								@csrf
								<input type="hidden" name="id" value="{{ $movie->id }}">
								<button class="btn btn-danger">delete</button>
								
							</form>
							<a href="{{ route('adminedit',["id"=>$movie->id]) }}" class="btn btn-warning">edit</a>

						</td>
					</tr>
				@endforeach
			</table>
		</form>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>