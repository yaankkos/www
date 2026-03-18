<!DOCTYPE html>
<html>

<head>
	<title>my view</title>
</head>
<body>
@if(count($users)>0)
@foreach($users as $user)
<p>{{ $user }}</p>
@endforeach
@else
<p>Массив пустой, пользователей нет.</p>
@endif
</body>

</html>