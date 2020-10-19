<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div>
        <form action="{{ route('admingenre')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="inputName" name="Genre_Name">
            </div>

            <button type="submit" class="btn btn-submit red">Submit</button>
        </form>
    </div>
		{{-- <table class="table">
				<tr>
					<th>Genre Name</th>
				</tr>
				@foreach ($genres as $genre)
					<tr>
						<td>{{ ++$loop->index }}</td>
						<td>{{ $movie->title }}</td>
						<td>
							<a href="{{ route('admincreateshow',["id"=>$genre->id]) }}" class="btn btn-success">create</a>
							<form action="{{ route('admindelete') }}" method="POST">
								@csrf
								<input type="hidden" name="id" value="{{ $genre->id }}">
								<button class="btn btn-danger">delete</button>
								
							</form>
							<a href="{{ route('adminedit',["id"=>$genre->id]) }}" class="btn btn-warning">edit</a>
						</td>
					</tr>
				@endforeach
			</table> --}}
		
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>