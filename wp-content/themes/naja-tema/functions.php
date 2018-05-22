<?php
if ( ! function_exists( 'baltabalta_setup' ) ) :
function baltabalta_setup() {
register_nav_menus( array(
'primary' => 'Pagrindinis Meniu'
) );
}
add_action( 'after_setup_theme', 'baltabalta_setup' );
endif;

// uzkrauname css ir js
wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
wp_enqueue_style( 'bootstrap-theme', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css', ['bootstrap'] );
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',
['bootstrap', 'bootstrap-theme'] );
wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', ['jquery'], '3.3.7', true );

?>

