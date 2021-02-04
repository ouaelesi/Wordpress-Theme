<?php 

// adding the css and js files 

function gt_setup(){
     wp_enqueue_style('Bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
     wp_enqueue_style('fontawsome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
     wp_enqueue_style('style' , get_stylesheet_uri() , NULL , microtime() ,);
     wp_enqueue_script('Bootstrap_script','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
     wp_enqueue_script('Bootstrap_script2','//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
     wp_enqueue_script('ajax','//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
     wp_enqueue_script("main" , get_theme_file_uri('/js/main.js'), NULL , microtime() , true) ; 
}

add_action('wp_enqueue_scripts', 'gt_setup'); 