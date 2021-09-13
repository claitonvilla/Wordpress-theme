<?php

    define('JS', get_template_directory_uri() . '/assets/js/' );
	define('IMG', get_template_directory_uri() . '/assets/img/' );
	define('CSS', get_template_directory_uri() . '/assets/css/' );
	define('NODE', get_template_directory_uri() . '/node_modules/');
	require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

    register_nav_menus( array(
		'header_menu' => 'Menu Header',
		//'footer_menu' => 'Menu Footer',
	) );

    if( function_exists('add_theme_support') ) {
		add_theme_support('post-thumbnails', array( 'post', 'page', 'pacotes', 'depoimentos'));
		add_image_size( 'contato', 400, 200, true ); // (cropped)
	}

    function create_posttype() {

		register_post_type('pacotes',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Pacote' ),
					'singular_name' => __( 'Pacote' )
				),
				'public' => true,
				'has_archive' => true,
				//'rewrite' => array('slug' => ''),
				'supports' => array(
					'title',
					'editor',
					'thumbnail'
				),
				'capability_type' => 'post',
			)
		);

		register_post_type('depoimentos',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Depoimentos' ),
					'singular_name' => __( 'Depoimento' )
				),
				'public' => true,
				'has_archive' => true,
				//'rewrite' => array('slug' => ''),
				'supports' => array(
					'title',
					'editor',
					'thumbnail'
				),
				'capability_type' => 'post',
			)
		);
	}
	add_action( 'init', 'create_posttype' );

    function wp_add_script_style () {

        //register the styles of website
		wp_register_style('bootstrap', NODE . 'bootstrap/dist/css/bootstrap.css');
		wp_enqueue_style('bootstrap');
        wp_register_style('appmin', CSS . 'app.css');
        wp_enqueue_style('appmin', false, array() , false, 'all');
    
        //register the scripts of website
		wp_register_script( 'bootstrapjs' , NODE . 'bootstrap/dist/js/bootstrap.js', ['jquery']);
		wp_enqueue_script('bootstrapjs');
        wp_register_script( 'nomejs', JS . 'jquery/dist/jquery.min.js');
        wp_enqueue_script('nomejs');
    }
    
    add_action('wp_enqueue_scripts', 'wp_add_script_style');

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		
	}

	function excerpt($limit) {
		return wp_trim_words(get_the_excerpt(), $limit);
	}

	function getPostViews($postID){
		$count_key = '_post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0 View";
		}
		return $count.' Views';
	}
	function setPostViews($postID) {
		$count_key = '_post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
		}
	}






