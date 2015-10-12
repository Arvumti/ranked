<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>RankED</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<header>Header</header>
	<div class="welcome">
		<h1>Ranked Project</h1>
		<input id="txtUsuario"placeholder="Usuario">
		<input id="txtPass"placeholder="Password">
		<button id="btnLogin">Login</button>

	</div>
</body>
<script type="text/javascript" src="{{ URL:: asset('.js')}}"></script>
<script type="text/javascript" src="{{ URL:: asset('.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnLogin').on('click', function(){

		})
	});
</script>
</html>
