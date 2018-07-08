<?php
/**
 * labquipsales functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package labquipsales
 */

if ( ! function_exists( 'ready_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ready_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on labquipsales, use a find and replace
		 * to change 'labquipsales' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'labquipsales', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' 	=>  'Main Menu',
			'footer-menu' 	=>  'Footer Menu',
		) );
		
		function default_menu(){
			
			echo '<ul class="main-menu">';
			echo '<li><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}

		function footer_menu(){
			
			echo '<ul class="footer-menu">';
			echo '<li><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
				 /* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		
		
		
		/* Register Post Type with category */
		
		$labels = array(
				'name'               => __( 'Slider', 'labquipsales' ),
				'singular_name'      => __( 'Slider', 'labquipsales' ),
				'menu_name'          => __( 'Home Slider', 'labquipsales' ),
				'name_admin_bar'     => __( 'Slider', 'labquipsales' ),
				'add_new'            => __( 'Add Slider', 'labquipsales' ),
				'add_new_item'       => __( 'Add New Slider', 'labquipsales' ),
				'new_item'           => __( 'New Slider', 'labquipsales' ),
				'edit_item'          => __( 'Edit Slider', 'labquipsales' ),
				'view_item'          => __( 'View Slider', 'labquipsales' ),
				'all_items'          => __( 'All Sliders', 'labquipsales' ),
				'search_items'       => __( 'Search Slider', 'labquipsales' ),
				'parent_item_colon'  => __( 'Parent Slider:', 'labquipsales' ),
				'not_found'          => __( 'No Slider found.', 'labquipsales' ),
				'not_found_in_trash' => __( 'No Slider found in Trash.', 'labquipsales' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'labquipsales' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'Slider' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon'      	 => 'dashicons-images-alt2',
				'supports'           => array( 'title','thumbnail')
			);

			register_post_type( 'home-slider', $args );
			
			
			
			/* Register New Taxonomy*/ 
			
			$labels = array(
				'name'              => _x( 'News Category', 'labquipsales' ),
				'singular_name'     => _x( 'News Category', 'labquipsales' ),
				'search_items'      => __( 'Search Category', 'labquipsales' ),
				'all_items'         => __( 'All Categories', 'labquipsales' ),
				'parent_item'       => __( 'Parent Category', 'labquipsales' ),
				'parent_item_colon' => __( 'Parent Category:', 'labquipsales' ),
				'edit_item'         => __( 'Edit Category', 'labquipsales' ),
				'update_item'       => __( 'Update Category', 'labquipsales' ),
				'add_new_item'      => __( 'Add New Category', 'labquipsales' ),
				'new_item_name'     => __( 'New Category Name', 'labquipsales' ),
				'menu_name'         => __( 'Category', 'labquipsales' ),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'news-category' ),
			);

			register_taxonomy( 'newscategory', array( 'news' ), $args );

		 
	
	}
endif;
add_action( 'after_setup_theme', 'ready_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ready_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'labquipsales' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'labquipsales' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ready_widgets_init' );


/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.7); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */
function ready_scripts() {
	
	wp_enqueue_style( 'labquipsales-website46c0', get_template_directory_uri().'/css/website46c0.css' );
	wp_enqueue_style( 'labquipsales-base', get_template_directory_uri().'/css/pr_sfx-base_15c78.css' );
	wp_enqueue_style( 'labquipsales-global5c78', get_template_directory_uri().'/css/global5c78.css' );
	
	wp_enqueue_style( 'labquipsales-icomoon', get_template_directory_uri().'/css/icomoon/style.css' );
	wp_enqueue_style( 'labquipsales-flickity', get_template_directory_uri().'/css/flickity.min.css' );
	wp_enqueue_style( 'labquipsales-main', get_template_directory_uri().'/css/main.css');
	wp_enqueue_style( 'labquipsales-style', get_stylesheet_uri() );

	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'labquipsales-loaderf941', get_template_directory_uri() . '/js/loaderf941.js', array('jquery'), '', true );
	wp_enqueue_script( 'labquipsales-flickitys', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'labquipsales-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );


}
add_action( 'wp_enqueue_scripts', 'ready_scripts' );


/**
 * Redux include
 */
require get_template_directory() . '/inc/opt/ReduxCore/framework.php';
require get_template_directory() . '/inc/opt/sample/config.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/cmb/init.php';
require get_template_directory() . '/inc/cmb/config.php';


/**
 * CMB2  include
 */
require get_template_directory() . '/inc/tgm/example.php';





// Hooked for Woocommerce

require get_template_directory() . '/inc/ecom/add.php';
require get_template_directory() . '/inc/ecom/remove.php';




// counter for woocommerce 

add_filter('add_to_cart_fragments', function($framments){ 

	ob_start();

	?>

<a href="#" class="MiniCartLink MiniCartInner" title="My cart">
	<i id="MiniCartIcon" class="GC14 sf-corner icon-cart MiniCartDesignImage1" style="color: rgb(255, 255, 255);"></i>
	<span class="GC14 MiniCartTotalItemsQuantity sf-corner" style="color: rgb(255, 255, 255);"> <?php echo WC()->cart->get_cart_contents_count();  ?> </span>
</a>

<?php 

$framments['a.MiniCartInner'] = ob_get_clean();

return $framments;


});


function currency_my_function( ) {
   global  $woocommerce;
   echo get_woocommerce_currency_symbol();
}





