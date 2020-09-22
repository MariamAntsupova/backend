  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route("posttest") }}" method="POST">
		@csrf
		<input type="text" name="name">		
		<button>submit</button>
	</form>
</body>
</html>