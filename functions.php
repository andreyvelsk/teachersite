<?php 
 function site_style() {  
	wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
	wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Montserrat:600|Playfair+Display:700|Roboto:400,700');
	wp_enqueue_style( 'slickslider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style( 'slickslider-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
function site_script() {
	// необходимо разрегистрировать jquery  от wordpress  и подключить CDN
	wp_deregister_script( 'jquery-core' ); 
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slickslider-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts','site_style' );
add_action('wp_enqueue_scripts', 'site_script');


add_filter('excerpt_more', function($more) {
	return '...';
});
?>