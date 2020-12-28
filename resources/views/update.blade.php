<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<form action="{{ route('update') }}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{ $product->id }}">
				<input type="image\jpg" name="image" value="{{ $product->image }}">
				<input type="text" class="form-control" name="title" value="{{ $product->title }}">
				<textarea name="description" class="form-control">{{ $product->description }}</textarea>
				<button class="btn btn-primary">update</button>
			</form>
		</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>