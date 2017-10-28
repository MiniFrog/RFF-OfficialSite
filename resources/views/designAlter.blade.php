<!DOCTYPE html>
<html>
<head>
	<title>alter</title>
</head>
<body>
<form action="http://scutrfa.com/designalterhandle" method="POST">
	<input type="hidden" name="original_teamname" value="{{$attributes['teamming'] or '2'}}">
	<input type="text" name="teamming" value="{{$attributes['teamming'] or '2'}}">
	<input type="text" name="havehuiyuan" value="{{$attributes['havehuiyuan'] or '2'}}">
	<input type="text" name="member1name" value="{{$attributes['member1name'] or '2'}}">
	<input type="text" name="member1xueyuan" value="{{$attributes['member1xueyuan'] or '2'}}">
	<input type="text" name="member1class" value="{{$attributes['member1class'] or '2'}}">
	<input type="text" name="member1sushe" value="{{$attributes['member1sushe'] or '2'}}">
	<input type="text" name="member1QQ" value="{{$attributes['member1QQ'] or '2'}}">
	<input type="text" name="member1dianhua" value="{{$attributes['member1dianhua'] or '2'}}">

	<input type="text" name="member2name" value="{{$attributes['member2name'] or '2'}}">
	<input type="text" name="member2xueyuan" value="{{$attributes['member2xueyuan'] or '2'}}">
	<input type="text" name="member2class" value="{{$attributes['member2class'] or '2'}}">
	<input type="text" name="member2sushe" value="{{$attributes['member2sushe'] or '2'}}">
	<input type="text" name="member2QQ" value="{{$attributes['member2QQ'] or '2'}}">
	<input type="text" name="member2dianhua" value="{{$attributes['member2dianhua'] or '2'}}">


	<input type="text" name="member3name" value="{{$attributes['member3name'] or '2'}}">
	<input type="text" name="member3xueyuan" value="{{$attributes['member3xueyuan'] or '2'}}">
	<input type="text" name="member3class" value="{{$attributes['member3class'] or '2'}}">
	<input type="text" name="member3sushe" value="{{$attributes['member3sushe'] or '2'}}">
	<input type="text" name="member3QQ" value="{{$attributes['member3QQ'] or '2'}}">
	<input type="text" name="member3dianhua" value="{{$attributes['member3dianhua'] or '2'}}">

	<input type="submit" name="altersubmit">
</form>
</body>
</html>