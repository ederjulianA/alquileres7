<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
H
<h1>IMAGES</h1>
@foreach($pro2 as $p)
<div class="p">
	<h2>{{$p->ProNom}}</h2>
	<img src="{{$p->ProImgLar}}" alt="">
</div>

@endforeach
</body>
</html>