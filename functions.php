<?php
if ( ! defined( 'TBR_IMAGES' ) ) {
	define( 'TBR_IMAGES', get_stylesheet_directory_uri() . '/assets/images/' );
}

if ( ! class_exists( 'TBR_Simulator' ) ) {
	class TBR_Simulator {
		public function __construct() {
			add_theme_support( 'post-thumbnails' );
			set_post_thumbnail_size( 350, 350, false );
			add_theme_support( 'title-tag' );
			add_action( 'init', array( $this, 'register_menus_area' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'tbr_enqueue_scripts' ) );

		}

		function register_menus_area() {
			register_nav_menus(
				array(
					'primary-menu' => esc_html__( 'Primary Menu', 'tbr' ),
				)
			);
		}

		function tbr_enqueue_scripts() {
			wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
			wp_enqueue_style( 'icons', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css' );
			wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', '', '3.3.1', true );
			wp_enqueue_script( 'scripts-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array( 'jquery' ), '', true );
		}
	}
}
new TBR_Simulator();
