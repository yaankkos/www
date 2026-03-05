<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
@foreach ($arr as $elem)
	{{ $loop->count }}
	{{ $elem }}
@endforeach
	</body>
</html>
