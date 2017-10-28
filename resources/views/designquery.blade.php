<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    	<title>chaxun</title>
    <script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/quwei.css') }}">
</head>
<body>
<form method="post" action="http://scutrfa.com/designqueryhandle">
<input type="text" name="query">
<input type="submit" name="querysubmit">
<p>
	@foreach($attributes as $attribute)
	<p>
		{{$attribute or 'i am testing'}}
	</p>
	@endforeach
</p>
</form>
<form action="http://scutrfa.com/designalter" method="post">
	<input type="hidden" name="teaminfo" value= "{{ $attributes['teamming'] or '0'}}">
	<input type="submit" name="infosubmit">
</form>
</body>
</html>