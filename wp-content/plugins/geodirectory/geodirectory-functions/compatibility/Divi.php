<?php
/**
 * Divi theme compatibility functions.
 *
 * This file lets the GeoDirectory Plugin use the Divi theme HTML wrappers to fit and work perfectly.
 *
 * @since 1.0.0
 * @package GeoDirectory
 */
add_filter('body_class', 'geodir_divi_signup_body_class', 999);
/**
 * replace divi body class on signup page.
 *
 * @since 1.0.0
 * @since 1.6.25 Fix detail page sidebar for Divi v3.0.87.
 * @package GeoDirectory
 * @param $classes
 * @return array|mixed
 */
function geodir_divi_signup_body_class($classes)
{
    if (geodir_is_page('login')) {
        $classes = str_replace('et_right_sidebar', 'et_full_width_page', $classes);
        $classes[] = 'divi-gd-signup';
    } else if ( geodir_is_page( 'detail' ) || geodir_is_page( 'preview' ) ) {
        $classes[] = is_rtl() ? 'et_left_sidebar' : 'et_right_sidebar';
    }
    return $classes;
}

add_action('geodir_wrapper_close', 'geodir_divi_action_wrapper_close', 11);
/**
 * wrapper close functions.
 *
 * @since 1.0.0
 * @package GeoDirectory
 */
function geodir_divi_action_wrapper_close()
{
    if (geodir_is_page('login')) {
        // We need to close extra divs generated by WRAPPER BEFORE MAIN CONTENT (below) because there is no sidebar on this page
        echo '</div></div>';
    }
}