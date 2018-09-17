<?php 
		// custom post types
		add_action('init', 'events_type_register');
		function events_type_register() {
			 $newsLabels = array(
					'name' => 'News Posts',
					'singular_name' => 'News Post',
					'add_new' => 'New News Posts',
					'add_new_item' => 'Add New News Posts',
					'edit_item' => 'Edit News Posts',
					'new_item' => 'New News Posts',
					'view_item' => 'View News Posts',
					'search_items' => 'Search News Posts',
					'not_found' => 'Found No News Posts',
					'not_found_in_trash' => 'Nothing in Trash',
					'parent_item_colon' => ''
			 );
			 $newsarg = array(
					'labels' => $newsLabels,
					'public' => true,
					'publicly_queryable' => true,
					'show_ui' => true,
					'query_var' => true,
					'menu_icon' => 'dashicons-calendar',
					'rewrite' => true,
					'capability_type' => 'post',
					'hierarchical' => true,
					'taxonomies'  => array( 'custom_taxonomies' ),
					'menu_position' => 4,
					'supports' => array('title','editor','thumbnail', 'custom-fields')
				 );
			 register_post_type( 'news' , $newsarg );
		}





	add_action( 'after_setup_theme', 'register_my_menu' );

	function register_my_menu() {
		register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
		register_nav_menu( 'footerNav', __( 'Footer Menu', 'theme-slug' ) );
	}

	if (function_exists('acf_add_options_page')) {
		acf_add_options_page();
		acf_set_options_page_title('Baja');
	}
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page();
		acf_set_options_page_title('Baja');
		acf_add_options_sub_page('Header');
		acf_add_options_sub_page('Second Section') ;
		acf_add_options_sub_page('Third Section') ;
		acf_add_options_sub_page('Fourth Section') ;
		acf_add_options_sub_page('Fifth Section') ;
		acf_add_options_sub_page('Sixth Section') ;
		acf_add_options_sub_page('FAQs') ;
		acf_add_options_sub_page('Footer') ;
		acf_add_options_sub_page('Terms of Service') ;
	}




	// changes permissions for options page, allows lower-level user access to options pages
	if( function_exists('acf_set_options_page_capability') ) {
	    acf_set_options_page_capability( 'manage_options' );
	}


	add_theme_support( 'post-thumbnails' ); 

	// admin footer message, shown in bottom left on all screens
	function zitro_admin_footer() {
	   echo '<span id="footer-thankyou">Wordpress Theme by <a href="https://zitrocreative.com">Zitro Creative</a>.</span>';
	}
	add_filter('admin_footer_text', 'zitro_admin_footer');



?>