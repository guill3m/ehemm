<?php
/**
 * @package WordPress
 * @subpackage ehemm
 */


/*
 * Support for Automatic Feed Links and Post Thumbnails
 */ 

add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
 

/*
 * Setting up the widget areas of the theme
 */ 

register_sidebar( array(
	'name' => 'Header Area One',
	'id' => 'header1',
	'description' => 'A widget area for your site header',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
) );

register_sidebar( array(
	'name' => 'Header Area Two',
	'id' => 'header2',
	'description' => 'A widget area for your site header',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
) );

register_sidebar( array(
	'name' => 'Header Area Three',
	'id' => 'header3',
	'description' => 'A widget area for your site header',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
) );

register_sidebar( array(
	'name' => 'Header Area Four',
	'id' => 'header4',
	'description' => 'A widget area for your site header, below the search form',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
) );

register_sidebar( array(
	'name' => 'Footer',
	'id' => 'footer1',
	'description' => 'A widget area on the footer, I suggest you to use this for change the licence text with (and only) the Text Widget. Also I would recomend not use a title for that widget.',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
) );


/*
 * Automatizing with a function the call for Custom Field data
 * Usage:
 <?php if(function_exists('get_custom_field_data')) {
   get_custom_field_data('key', true);
 } ?>
 */
 
function get_custom_field_data($key, $echo = false) {
  global $post;
  $value = get_post_meta($post->ID, $key, true);
  if($echo == false) {
    return $value;
  } else { 
    echo $value;
  }
}


/*
 * That's all, have a good day
 */ ?>