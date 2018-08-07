<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp-plugin');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '=alriO~GYu+V6GC+(`r75XA1mzC0@p-,uUKgE4IvpuNru^R`p($lSk Q+J4#<|Bc');
define('SECURE_AUTH_KEY', 'P$}TX9Ey LRGW!1NJ dtn#=f:%t*=F*p(B/jXM/9<dtoHd^hyqY4qyO6*gx,1Q1(');
define('LOGGED_IN_KEY', 'h{m#<sE)aQ]C %aaa7vLjNFx}y:lNbkb-V-8@zB|6o(0I5[Pcu[<zt&pqw09^?_ ');
define('NONCE_KEY', ':I-who-/(E&1u2r5b+LrySJ$-k2w+h=6=Z$ QUG@qCy0M$v(|1{?W*.e@%~OcfIN');
define('AUTH_SALT', 'iZmw fngD^?[(Wc~|0Lscbtac+ ,&4I{eL8hYp -ulS4P;ko)3]{co2^3Hz9/z],');
define('SECURE_AUTH_SALT', '@]n93_*H1Av7PDV`!UXH103wgwbv.}Z7u,1.|s3!x]EfEL974vCXm-[3$JT;DIrJ');
define('LOGGED_IN_SALT', '<cOWu86P$x4<qh1T:aZLMv1 T)IS&kQ05H[v4da=`(sx|In2!S`yLpy]aOin^c:V');
define('NONCE_SALT', 'm} ;egu-wBx:Gkk8IX8]s##fgnCY+8,h[2rX!2hj/d:fs[KstJ4)SvN<9qj?I}6k');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

