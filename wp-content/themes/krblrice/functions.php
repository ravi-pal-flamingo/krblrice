<?php
function theme_custom_menus() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'theme_custom_menus');

register_nav_menus(array('primery-menu'=>'Primary Menu'));

function krblrice_stylesheet(){
    wp_enqueue_style('swiper-bundle','https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css');
    wp_enqueue_style( 'style-css', get_template_directory_uri().'/assets/css/style.css' );
    wp_enqueue_style( 'responsive-css', get_template_directory_uri().'/assets/css/responsive.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts','krblrice_stylesheet');

function krbl_scripts() {
	wp_enqueue_script( 'jquery-3.7','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js',array(),'',true );
	wp_enqueue_script( 'jquery-swiper','https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js',array(),'',true );
	wp_enqueue_script( 'lazysizes','https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js',array(),'',true );
	wp_enqueue_script( 'youtube-player-api', 'https://www.youtube.com/player_api',array(),'',true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri().'/assets/js/custom.js',array(),'',true );
}
add_action( 'wp_enqueue_scripts', 'krbl_scripts' );

function custom_js_footer(){
    ?>
    <script>
        $(document).ready(function(){

        })
    </script>
    <?php
}

add_action('wp_footer','custom_js_footer');

function custom_style_header(){
    
}

add_action('wp_header','custom_style_header');
?>