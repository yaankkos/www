<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
@if(count($numbers)>0)
<p>Сумма элементов:{{ array_sum($numbers) }}</p>
@else<p>Массив пустой.</p>
@endif
</body>

</html>