<?php 
/*
Plugin Name:  Quiz Book
Plugin URI:
Description:  Plugin para añadir Quizes o Cuestionarios con opción múltiple
Version:      1.0
Author:       Susana Piñero
Author URI:
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  quizbook
*/

/* Añado el post type de mi plugin */
require_once plugin_dir_path(__FILE__) . 'includes/posttype.php';

/*
* Regerera las reglas de las URLS al activar
*/
register_activation_hook(__FILE__, 'quizbook_rewrite_flush');

/*
* Añade metaboxes a los Quizes
*/
require_once plugin_dir_path(__FILE__) . 'includes/metaboxes.php';
/*
* Añade Roles a los Quizes
*/
require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';
register_activation_hook( __FILE__, 'quizbook_crear_role' );
register_deactivation_hook( __FILE__, 'quizbook_remover_role' );
/*
* Añade capabilities a los Quizes
*/
register_activation_hook( __FILE__, 'quizbook_agregar_capabilities' );
register_deactivation_hook( __FILE__, 'quizbook_remover_capabilities' );
/*
* Añade Shortcode
*/
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';
/*
* Añade Las Funciones
*/
require_once plugin_dir_path(__FILE__) . 'includes/funciones.php';
?>