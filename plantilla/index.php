<!DOCTYPE html/>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="Description" content=""/>
	<meta name="author" content="Susana Piñero"/>
	<meta name="keywords" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Network Taxi | WIN</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
	<link href="https://fonts.googleapis.com/css?family=Nunito:600,700" rel="stylesheet">
	<link rel="icon" type="text/css" href="img/favicon.ico"/>
</head>
<body>
	<nav id="nav" class="nav">
		<a href="#">
			<figure class="logo">
				<img src="img/icon.png"/>
			</figure>
			<span id="name" class="name">WIN</span>
		</a>
		<span class="menubtn"></span>
		<div id="sideNav" class="sideNav">
			<span class="closebtn"></span>
			<div class="menu">
				<!--<a href="#">About</a> -->
				<a class="menu-link" href="index.php">Inicio</a>
				<a class="menu-link" href="about-us.html">Sobre nosotros</a>
				<a class="menu-link" href="#contact">Contactanos</a>
			</div>
		</div>
	</nav>
	<header>
		<div class="bg"></div>
		<div class="header-title flex-box-sm-landscape">
			<div class="form">
				<h6 class="text-center">Iniciar sesón</h6>
				<form id="sesion-form" class="text-left">
					<label for="user"><input id="user" type="text" name="user" placeholder="Usuario"></label>
					<label for="password"><input id="password" type="password" name="password" placeholder="Contraseña"></label>
					<label for="remember" class="inline-flex"><input type="checkbox" name="remember" class="remember"> Recordar mis datos</label>
					<input id="send" type="submit" name="send" value="Entrar">
					<a href="#">Olvidé mi contraseña</a>
				</form>
			</div>
			<article id="article" class="article">
				<div class="services-love">
					<figure class="img-about icons-me love"></figure>
					<h6>Creamos El Primer Network taxi del mundo</h6>
					<p>Para crear cien mil nuevos puestos de trabajo y una propuesta revolucionaria: compartir acciones con usuarios y conductores.</p>
				</div>
			</article>
		</div>
	</header>
	<footer id="contact">
		<div class="flex-box">
			
			<address class="contact text-center">
				<p title="E-mail" class="icons-footer email"> <a href="mailto:soporte@winhold.net?Subject=Contacto" target="_top">soporte@winhold.net</a></p>
			</address>	
		</div>
	</footer>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/myScript.js"></script>
</body>
</html>