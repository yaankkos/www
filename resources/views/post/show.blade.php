<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
@forelse ($arr as $elem)
	<p>{{ $elem }}</p>
@empty
	<p>в массиве нет элементов</p>
@endforelse
	</body>
</html>
