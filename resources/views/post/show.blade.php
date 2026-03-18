<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
<p>{{ $location['country'] ?? 'Россия'}}</p>
<p>{{ $location['city'] ?? 'Москва'}}</p>
</body>

</html>