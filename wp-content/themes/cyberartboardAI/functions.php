<?php
function nd_dosth_enqueue_styles() {
   //echo '<link rel="stylesheet" href="http://localhost/cyberartboartAI/wp-content/themes/nd-dosth/assets/css/normalize.css" type="text/css" media="all">';
   
   
   wp_enqueue_style( 
   'normalize',
   get_stylesheet_directory_uri() . '/assets/css/normalize.css', 
   array(), 
   false, 
   'all' 
   );
   wp_enqueue_style( 
        'bootstrap',
        get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', 
        array(), 
        false, 
        'all' 
    );
	
	wp_enqueue_style( 
   'main-stylesheet',
    get_stylesheet_uri(), 
    array('normalize','bootstrap'), 
    '1.0', 
    'all' 
);

}
add_action( 'wp_enqueue_scripts', 'nd_dosth_enqueue_styles' );


function nd_dosth_enqueue_scripts() {
    wp_enqueue_script( 
        'main-js', 
        get_stylesheet_directory_uri() . '/assets/js/main.js', 
        array('jquery'), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'nd_dosth_enqueue_scripts' );