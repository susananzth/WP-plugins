<!DOCTYPE html>
<html <?php language_attributes(); ?> > 
    <!-- Sustituyo el 'lang="es"' por ese llamado de wordpress donde obtiene el atributo de lenguaje de la instalación del wordpress. |
         I substitute the 'lang = "is"' for that wordpress call where it gets the language attribute of the wordpress installation-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
            <!-- Sustituyo el "uft-8" por la función que trae la información de la instalacion de wordpress. |
            I substitute the "uft-8" for the function that brings the information of the wordpress installation.-->
	<title> <?php wp_title(' | ', true, 'right') ?> <?php bloginfo('name'); ?> </title><!-- Susana's Theme WordPress | by Susana Piñero -->
            <!-- Imprimo el título de wordpress, coloco un separador, verdadero para que se imprima, lo ajusto a la derecha. Con bloginfo, obtengo el titulo de la página. |
            I print the wordpress title, I put a separator, true to be printed, I adjust it to the right. With bloginfo, I get the title of the page. -->
	
    <?php wp_head(); ?>
    <!-- Aquí llamo los script para cargar y ejecutar todas las funciones de cabecera. |
         I call the script to load and execute all the header functions.-->
</head>
<body>
	<div id="global-container">
		<header id="main-header">
			<h1 class="site-title"> <?php bloginfo('name'); ?> </h1>
                <!-- Obtengo el título de la página y lo imprimo | I get the title of the page and print it -->
			<h2 class="site-description"> <?php bloginfo('description'); ?> </h2>
                <!-- Obtengo la descripción de la página y lo imprimo | I get the description of the page and print it -->
		</header><!-- /#main-header -->
		
		<nav id="main-nav">
			<ul class="menu">
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Portfolio</a></li>
				<li><a href="">Abilities</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Terms and Conditions</a></li>
			</ul>
		</nav><!-- /#main-nav -->
		
		<section id="global-content" class="cf">