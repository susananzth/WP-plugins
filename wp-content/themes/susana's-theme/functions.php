<?php
function apk_load_styles() {
    /* Creo una función para carcar los estilos. |
       I create a function to load the styles. */
    wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');
        /* Aquí registro la hoja de estilo, dándole nombre, donde está ubicado, si depende de otra hoja de esilo para funcionar, la versión y a que medios se va a aplicar (pantalla, smartphone, tv, o todo). |
        I register the style sheet, giving it a name, where it is located, if it depends on another style sheet to work, the version and to what media is going to be applied (screen, smartphone, tv, or all). */
    wp_enqueue_style('theme_style');
        /* Para cargar la hoja de estilo, utilizo la siguiente función y como parámetro le coloco el nombre de la hoja de estilo. |
        To load the style sheet, I use the following function and as a parameter I put the name of the style sheet.*/
}
add_action('wp_enqueue_scripts', 'apk_load_styles');
    /* Asocio la función a la acción 'wp_enqueue_scripts'. |
       I associate the function to the action 'wp_enqueue_scripts'*/
?>
     