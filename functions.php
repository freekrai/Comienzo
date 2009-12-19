<?php
// register sidebar one
   if ( function_exists('register_sidebar') ) {
      register_sidebar(array('name'=>'sidebar2',
          'before_widget' => '<li id="%1$s" class="widget %2$s">',
          'after_widget' => '</li>',
          'before_title' => '<h2 class="widgettitle">',
          'after_title' => '</h2>',
      ));
// register sidebar two      
   register_sidebar(array('name'=>'sidebar2',
          'before_widget' => '<li id="%1$s" class="widget %2$s">',
          'after_widget' => '</li>',
          'before_title' => '<h2 class="widgettitle">',
          'after_title' => '</h2>',
   ));
}
// jQuery included from google code
	if( !is_admin()){
	   wp_deregister_script('jquery'); 
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"), false, '1.3.2'); 
	   wp_enqueue_script('jquery');
	}
// WP threaded comments
	function theme_queue_js(){
	  if (!is_admin()){
	    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
	      wp_enqueue_script( 'comment-reply' );
	  }
	}
	add_action('get_header', 'theme_queue_js');
// 2.9 post thumbnails
add_theme_support('post-thumbnails');
?>