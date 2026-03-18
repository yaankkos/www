<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
@if($age>18)
<p>Вам есть 18 лет - доступ открыт.</p>
@else 
<p>Вам нет 18 лет - доступ закрыт.</p>
@endif
</body>

</html>