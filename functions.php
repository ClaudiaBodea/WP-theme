<?php
if ( ! function_exists ( 'clautheme_setup' ) ) :
	function clautheme_setup() {
		// add support for featured image
		add_theme_support ( 'post-thumbnails');
		add_image_size ( 'post-image', 1055, 530);
		add_theme_support ( 'title-tag' );
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'clautheme'),
			)
		);
	}
	add_action( 'after_setup_theme', 'clautheme_setup' );
endif;

if ( ! function_exists( 'clautheme_scripts' ) ) :
	function clautheme_scripts() {
		wp_enqueue_style( 'lato_font', 'https://fonts.googleapis.com/css?family=Lato:400,700,700i', array(), false, 'all' );
		wp_enqueue_style ( 'font_awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), false, 'all');
		wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/reset.css', array(), false, 'all');
		wp_enqueue_style( 'style', get_stylesheet_uri(), array(). '/style.css', array(), false, 'all');
		wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css', array(), false, 'all');
		wp_enqueue_style('header', get_stylesheet_directory_uri() . '/css/header.css', array(), false, 'all');
	}
	add_action( 'wp_enqueue_scripts', 'clautheme_scripts');
endif;

// function iap_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => __( 'Sidebar', 'iaptheme' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => __( 'Add widgets here to appear in your sidebar.', 'iaptheme' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h3 class="widget-title">',
// 			'after_title'   => '</h3>',
// 		)
// 	);
	
// }
// add_action( 'widgets_init', 'iap_widgets_init' );