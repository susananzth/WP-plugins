<?php
	include 'top-pague.php';
	include 'nav.php';
?>
	<header>
		<div class="bg"></div>
		<div class="header-title flex-box-sm-landscape">
			<div class="form">
				<h6 class="text-center">Iniciar sesión</h6>
				<form id="sesion-form" class="text-left">
					<label for="user"><input id="user" type="text" name="user" placeholder="Usuario"></label>
					<label for="password"><input id="password" type="password" name="password" placeholder="Contraseña"></label>
					<label for="remember" class="inline-flex remember"><input type="checkbox" name="remember" class="check-rem"> Recordar mis datos</label>
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
<?php
	include 'footer.php';
?>