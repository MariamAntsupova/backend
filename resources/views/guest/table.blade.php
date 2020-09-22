<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border:solid 1px black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>სახელი</th>
			<th>გვარი</th>
			<th>მისამართი</th>
			<th>ბიოგრაფია</th>
			<th>დაბადების თარიღი</th>
		</tr>
		<tr>
			@foreach ($newdata as $data)
				<td>{{ $text }}</td>
				<td>{{ $text }}</td>
				<td>{{ $text }}</td>
				<td>{{ $textarea }}</td>
				<td>{{ $data }}</td>
			@endforeach

		</tr>
	</table>
</body>
</html>

{{-- სახელი
გვარი
მისამართი
ბიოგრაფია textarea'
დაბადების თარიღი --}}