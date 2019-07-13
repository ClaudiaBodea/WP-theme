<?php
if ( ! function_exists ( 'clautheme_setup' ) ) :
		function clautheme_setup() {
				// Add support for featured image
				add_theme_support( 'post-thumbnails' );
				// Create image sizes based on theme design
				add_image_size( 'featured-image', 1200, 480 ); 
				// add_image_size( 'featured-image-small', 380, 255, true ); 
				// add_image_size( 'featured-image-sticky', 1200, 400, true ); 
				// Add theme support, title provided by WP
				add_theme_support ( 'title-tag' );
				// Add nav menus. This theme uses wp_nav_menu() in two locations.
				register_nav_menus(
						array(
								'primary_menu' => __( 'Primary Menu', 'clautheme' ),
								'footer_menu'  => __( 'Secondary Menu', 'clautheme' ),
						)
				);
		}
		// after_setup_theme		
		add_action( 'after_setup_theme', 'clautheme_setup' );
endif;

if ( ! function_exists( 'clautheme_scripts' ) ) :
		function clautheme_scripts() {
				wp_enqueue_style( 'lato_font', 'https://fonts.googleapis.com/css?family=Lato:400,700,700i', array(), false, 'all' );
				wp_enqueue_style ( 'font_awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), false, 'all');
				wp_enqueue_style( 'bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.css', array(), false, 'all' );
				wp_enqueue_style( 'main-style', get_stylesheet_uri() , array(), false, 'all' );
				// wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), false, 'all' );
				// wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), false, true );
				// wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), false, true );
		
				// wp_enqueue_style( 'style', get_stylesheet_uri(), array(), false, 'all');
				// wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/css/reset.css', array(), false, 'all');
				// wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css', array(), false, 'all');
				// wp_enqueue_style('header', get_stylesheet_directory_uri() . '/css/header.css', array(), false, 'all');
		}
		add_action( 'wp_enqueue_scripts', 'clautheme_scripts');
endif;

// function iap_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => __( 'Sidebar', 'iaptheme' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => __( 'Add widgets here to appear in your sidebar.', 'iaptheme' ),
// 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<h3 class="widget-title">',
// 			'after_title'   => '</h3>',
// 		)
// 	);	
// }
// add_action( 'widgets_init', 'iap_widgets_init' );
// add_filter( 'comment_form_fields', 'example_order_comment_form_fields' );
// function example_order_comment_form_fields( $fields ) {
//   	// Move comment field last.
// 	$fields['comment'] = array_shift( $fields );
//   return $fields;
// }
