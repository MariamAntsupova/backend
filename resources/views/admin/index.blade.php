<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="card">

	{{-- <button class="btn btn-success">create</button>	 --}}
 		<table class="table">
			<tr>
				<th>N</th>
				<th>title</th>
				<th>action</th>
			</tr>
			@foreach ($posts as $post)
				<tr>
					<td>{{ ++$loop->index }}</td>
					<td>{{ $post->title }}</td>
					<td>
						<a href="{{ route('admincreateshow',["id"=>$post->id]) }}" class="btn btn-success">create</a>
						<form action="{{ route('admindelete') }}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{ $post->id }}">
							<button class="btn btn-danger">delete</button>
						</form>
						<a href="{{ route('adminedit',["id"=>$post->id]) }}" class="btn btn-warning">edit</a>

					</td>
				</tr>
			@endforeach
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>