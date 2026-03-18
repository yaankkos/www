<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
@for($i = 1; $i <= 10; $i++)
<p>Абзац номер {{ $i }}</p>
@endfor
</body>

</html>