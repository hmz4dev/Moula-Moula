<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>ZEP-Contacts</title>
</head>
<body>

<h2>List of Contacts</h2>

	<ul>
	@foreach($contacts as $cont)
		<li>
			<h3>{{$cont->name}}</h3>
			<p>{{$cont->message}}</p>
			<hr>
			@endforeach
		</li>
	</ul>


</body>
</html>