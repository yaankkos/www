<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
<table border="1">
	@foreach($data as $cell)
	<td>{{ $cell }}</td>
	@endforeach
</table>
</body>

</html>