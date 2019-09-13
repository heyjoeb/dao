<?php
	// REGISTER PRIMARY NAVIGATION
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'daoTheme' )
	) );

	// ADD FONTS
	function dao_google_fonts() {
	wp_enqueue_style( 'dao-google-fonts', 'https://fonts.googleapis.com/css?family=Muli:400,600,700&display=swap', false );
	}
	add_action( 'wp_enqueue_scripts', 'dao_google_fonts' );

	// ADD SCRIPTS AND STYLES
	function dao_scripts() {
	  wp_enqueue_style( 'main', get_stylesheet_uri() );
    wp_enqueue_script( 'buildJs', get_template_directory_uri() . '/js/min/build.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'mainJs', get_template_directory_uri() . '/js/min/main.min.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'dao_scripts' );

	// Register Custom Navigation Walker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

	// ADD FEATURED IMAGE TO POSTS
	add_theme_support( 'post-thumbnails' );

	// CUSTOM LOGIN
	function login_styles() {
	    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/scss/login.css' );
	}
	add_action( 'login_enqueue_scripts', 'login_styles' );

	// ADD CLASS TO BODY IF IT'S NOT HOME
	function my_class_names($classes) {
		// add 'class-name' to the $classes array
		if( !is_front_page() ) $classes[] = 'interna';
		// return the $classes array
		return $classes;
	}
	add_filter('body_class','my_class_names');

	// ENABLE OPTIONS PAGE IN ACF
	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Módulos Generales',
			'menu_title'	=> 'Módulos',
			'menu_slug' 	=> 'modulos-generales',
			'capability'	=> 'edit_posts',
			'position'		=> false,
			'icon_url'      => false,
			'redirect'		=> true
		));


		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'footer',
			'menu_slug' 	=> 'footer',
			'capability'	=> 'edit_posts',
			'parent_slug'	=> 'modulos-generales',
			'position'		=> false,
			'icon_url'      => false
		));

	}

	// LIMIT CHARACTERS IN POST EXCERPT
	function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 50);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
	$excerpt = $excerpt.'... <a href="'.$permalink.'">más</a>';
	return $excerpt;
	}

	// INCREASE UPLOAD LIMIT
	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );

	// BOOTSTRAP PAGER

// Bootstrap pagination function

function wp_bs_pagination($pages = '', $range = 4)

{

     $showitems = ($range * 2) + 1;



     global $paged;

     if(empty($paged)) $paged = 1;



     if($pages == '')

     {

         global $wp_query;

		 $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }



     if(1 != $pages)

     {

        echo '<div class="col-xs-12 text-center">';
        echo '<nav><ul class="pagination"><li class="disabled hidden"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>';

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";

         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";



         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>

    </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";

             }

         }



         if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";

         echo "</ul></nav>";
         echo "</div>";
     }

}















