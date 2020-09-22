<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border:solid 1px black;
			padding: 5px;
			border-collapse: collapse;
			color: white;
		    background: rgba(0, 0, 0, .5);
		    margin-left: 35%; 
		    margin-top: 20%;
		}
		body{
			background-color: #CEB6D7;
		}
		h1{
			text-align: center;
			letter-spacing: 4px;
			color: white;
			background: rgba(0, 0, 0, .5);


		}
	</style>
	<link rel="stylesheet" href="test.css">

</head>
<body>
	<h1>FORM</h1>
	<table>
		<tr>
			<th>სახელი</th>
			<th>გვარი</th>
			<th>მისამართი</th>
			<th>შესახებ</th>
			<th>დაბადების თარიღი</th>

		</tr>
		<tr>
			@foreach ($newdata as $text)
				<td>{{ $text["name"] }}</td>
				<td>{{ $text["surname"] }}</td>
				<td>{{ $text["add"] }}</td>
				<td>{{ $text["info"] }}</td>
				<td>{{ $text["dateofbirth"] }}</td>

			
			@endforeach

		</tr>
	</table>
</body>
</html>

