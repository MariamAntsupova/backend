<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="{{ route('adminsavepage') }}">
		@csrf
		<input type="text" name="title">
		<textarea name="text"></textarea>
		<input type="text" name="image">
		<button>submit</button>
	</form>

</body>
</html>