<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

add_action( 'after_setup_theme', 'zankoav_theme_init' );

function zankoav_theme_init() {
	/**
	 * add title tag auto
	 */
	add_theme_support( 'title-tag' );
	
	/**
	 * add thumbnails for all post types
	 */
	add_theme_support( 'post-thumbnails' );

//	add_image_size( 'home_img_lg', 450, 450, true );
//	add_image_size( 'home_img_md', 400, 400, true );
//	add_image_size( 'home_img_sm', 350, 294, true );
//    add_image_size( 'home_img_m', 304, 304, true );
//    add_image_size( 'partner_logo_m', 114, 50, true );
//    add_image_size( 'on_sale', 350, 206, true );
//
	
	/**
	 * add custom-logo in customizer
	 */
	add_theme_support( 'custom-logo' );
	
	add_theme_support( 'menus' );
	
	register_nav_menus( [
			                    'main_menu'  => 'Main Menu',
//			                    'right_menu' => 'Right Menu',
//			                    'footer_menu' => 'Footer Menu',
	                    ] );
	
	/**
	 * add html5 support
	 */
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	
	function empty_content($str) {
		return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
	}

}