<?php
function ajout_scripts() {

// SAVE NEW SCRIPT BOOTSTRAP
wp_register_script('bootstrap_script', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array('jquery'),'1.1', true);

// appel du script dans la page
wp_enqueue_script('bootstrap_script');


// MAIN.JS
wp_register_script('main_script', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'),'1.1', true);

// appel du script dans la page
wp_enqueue_script('main_script');


// enregistrement d'un nouveau style BOOTSTRAP
wp_register_style( 'bootstrap_style', get_template_directory_uri() . '/assets/styles/bootstrap.min.css' );

// appel du style dans la page
wp_enqueue_style( 'bootstrap_style' );


// enregistrement d'un nouveau style STYLE.CSS
wp_register_style( 'main_style', get_template_directory_uri() . '/assets/styles/main.css' );

// appel du style dans la page
wp_enqueue_style( 'main_style' );


wp_register_style( 'google_style', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto' );
wp_enqueue_style( 'google_style' );
}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );
 ?>
