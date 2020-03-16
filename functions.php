<?php 

function load_css()
{
    wp_register_style('style1', get_template_directory_uri().'/assets/css/main.css', array(), false, 'all');
    wp_enqueue_style('style1');

    wp_register_style('style2', get_template_directory_uri().'/assets/css/dashicons.min.css', array(), false, 'all');
    wp_enqueue_style('style2');
	
	wp_register_style('style3', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), false, 'all');
    wp_enqueue_style('style3');

        wp_register_style('style4', get_template_directory_uri().'/assets/css/main2.css', array(), false, 'all');
    wp_enqueue_style('style4');
    
	
	
    
}
add_action('wp_enqueue_scripts', 'load_css');

/* Enqueue script */

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('js4', get_template_directory_uri().'/assets/js/main.js', array(), false, true);
    wp_enqueue_script('js4');

}
add_action('wp_enqueue_scripts', 'load_js');


    /* Theme Option */
add_theme_support('menus');
add_theme_support('post-thumbnails');


function gt_init(){
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form', 'caption')
);
}
add_action('after_setup_theme', 'gt_init');

function catch_that_image() {

    global $post, $posts;
    
    $first_img = '';
    
    ob_start();
    
    ob_end_clean();
    
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    
    $first_img = $matches [1] [0];
    
    
    
    if(empty($first_img)){
    
    $first_img = "http://wapforum.com.ng/siteimg/wapforum.jpg";
    
    }
    
    return $first_img;
    
    }

  // Changing excerpt length
function new_excerpt_length($length) {
return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>