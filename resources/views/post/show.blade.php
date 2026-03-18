<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
@if($age>18)
<p>Вам больше 18 лет.</p>
@elseif($age==18)
<p>Вам ровно 18 лет.</p>
@else 
<p>Вам меньше 18 лет.</p>
@endif
</body>

</html>