<!DOCTYPE html/>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="Description" content="Susana's portfolio, Front-end Web Developer. I show you my jobs, skills, the tools I use and the way to contact me."/>
	<meta name="author" content="Susana Piñero"/>
	<meta name="keywords" content="frontend web developer, web design, frontend, portfolio,"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
	<title>Susana's portfolio | Front-end web Developer</title>
	<link rel="stylesheet" type="text/css" href="css/myStyle.css"/>
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
				<a class="menu-link" href="#services">Inicio</a>
				<a class="menu-link" href="#skills">Sobre nosotros</a>
				<a class="menu-link" href="#contact">Contactanos</a>
			</div>
		</div>
	</nav>
	<header>
		<div class="bg"></div>
		<div class="header-title">
			<h1>WIN</h1>
			<h5 class="subtitle">Es compartir</h5>
			<div class="form">
				<h6 class="text-center">Iniciar sesón</h6>
				<form id="sesion-form" class="text-center">
					<label for="user"><input id="user" type="text" name="user" placeholder="Usuario"></label>
					<label for="password"><input id="password" type="password" name="password" placeholder="Contraseña"></label>
					<input id="send" type="submit" name="send" value="Entrar">
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