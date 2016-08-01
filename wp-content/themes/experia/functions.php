<?php
function experia_scripts() { 
	wp_enqueue_style('experia-font', experia_font_url(), array());
	
	wp_enqueue_style( 'experia-bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'experia-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'experia-editor-style', get_template_directory_uri().'/editor-style.css' ); 
	wp_enqueue_style( 'experia-main-style', get_template_directory_uri().'/css/responsive.css' );		
	wp_enqueue_style( 'experia-base-style', get_template_directory_uri().'/css/style_base.css' );
	wp_enqueue_style( 'experia-font-awesome-style', get_template_directory_uri().'/css/font-awesome.css' );
	wp_enqueue_style( 'experia-animation-style', get_template_directory_uri().'/css/animation.css' );
	//wp_enqueue_style( 'experia-tooltip-style', get_template_directory_uri().'/css/tooltipster.bundle.min.css' );
	//wp_enqueue_script( 'experia-bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' );
	
	//wp_enqueue_script( 'experia-parallax_js', get_template_directory_uri() . '/js/parallax.min.js' );
	//wp_enqueue_script( 'experia-tooltip_js', get_template_directory_uri() . '/js/tooltipster.bundle.min.js' );
	wp_enqueue_script( 'experia-circle_menu_js', get_template_directory_uri() . '/js/jQuery.circleMenu.js' );
	wp_enqueue_script( 'experia-custom_js', get_template_directory_uri() . '/js/custom.js' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'experia_scripts' );


function experia_font_url(){
	$font_url = '';		
	
	/* Translators: If there are any character that are not
	* supported by Roboto, trsnalate this to off, do not
	* translate into your own language.
	*/
	$roboto = _x('on','Roboto:on or off','experia');
	$robotocondensed = _x('on','Roboto Condensed:on or off','experia');
	$opensans = _x('on','Open Sans:on or off','experia');
	$lato = _x('on','Lato:on or off','spirited-lite');
	$montserrat = _x('on','Montserrat:on or off','experia');
	
	/* Translators: If there has any character that are not supported 
	*  by Scada, translate this to off, do not translate
	*  into your own language.
	*/		
	
	if('off' !== $roboto || 'off' !== $robotocondensed || 'off' !== $opensans || 'off' !== $lato || 'off' !== $montserrat ){
		$font_family = array();
		
		if('off' !== $roboto){
			$font_family[] = 'Roboto:300,400,600,700,800,900';
		}
		
		if('off' !== $robotocondensed){
			$font_family[] = 'Roboto Condensed:400,300,700,300italic,400italic,700italic';
		}			
		
		if('off' !== $opensans){
			$font_family[] = 'Open Sans:400,300,300italic,600,400italic,600italic,700,800,700italic,800italic';
		}	
		
		if('off' !== $lato){
			$font_family[] = 'Lato:400,400italic,700,700italic,900,900italic';
		}
		
		if('off' !== $montserrat){
			$font_family[] = 'Montserrat:400,700';
		}									
			
		$query_args = array(
			'family'	=> urlencode(implode('|',$font_family)),
		);
		
		$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	}
	
	return $font_url;
}

function experia_widgets_init() {
	
    register_sidebar( array(
        'name' => 'Experia Logo',
        'id' => 'experia_logo',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ) );
	
    register_sidebar( array(
        'name' => 'Experia Right sidebar',
        'id' => 'experia_right_sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	
    register_sidebar( array(
        'name' => 'Experia Footer Text Left',
        'id' => 'experia_footer_text_left',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
	
    register_sidebar( array(
        'name' => 'Experia Footer Text Center',
        'id' => 'experia_footer_text_center',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
	
    register_sidebar( array(
        'name' => 'Experia Footer Text Right',
        'id' => 'experia_footer_text_right',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
	
    register_sidebar( array(
        'name' => 'Experia Ads',
        'id' => 'experia_ads',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
	
    register_sidebar( array(
        'name' => 'Experia Circular Menu',
        'id' => 'experia_circular_menu',
    ) );
}
add_action( 'widgets_init', 'experia_widgets_init' );




function create_post_type() {
	add_theme_support('post-thumbnails');
	add_post_type_support( 'dealers', 'thumbnail' );  
	register_post_type( 'dealers',
	  array(
		'labels' => array(
		  'name' => __( 'Dealers' ),
		  'singular_name' => __( 'Dealer' ), 
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'rewrite' => array('slug' => 'dealers'),
	  )
	);
	
	add_theme_support('post-thumbnails');
	add_post_type_support( 'news', 'thumbnail' );  
	register_post_type( 'news',
	  array(
		'labels' => array(
		  'name' => __( 'News' ),
		  'singular_name' => __( 'News' ), 
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'rewrite' => array('slug' => 'news'),
	  )
	);
	
	add_theme_support('post-thumbnails');
	add_post_type_support( 'projects', 'thumbnail' );  
	register_post_type( 'projects',
	  array(
		'labels' => array(
		  'name' => __( 'Projects' ),
		  'singular_name' => __( 'Project' ), 
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'rewrite' => array('slug' => 'projects'),
	  )
	);
}
add_action( 'init', 'create_post_type' );

function get_dealers($limit = 30){
	$args = array(
		'posts_per_page'   => $limit,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'dealers',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   	   => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
	$posts_array = get_posts( $args );
	return $posts_array;
}

function get_news($limit = 30){
	$args = array(
		'posts_per_page'   => $limit,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'news',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   	   => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
	$posts_array = get_posts( $args );
	return $posts_array;
}


function experia_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. esc_attr( $paged ) . ' of ' . esc_attr( $wp_query->max_num_pages ) .'</span></li>';
		foreach ( $page_format as $page ) {
			echo '<li>' . wp_kses_post($page) . '</li>';
		}
		echo '</ul></div></div>';
	}
}

function truncateString($string, $len = 10) {
    if (strlen($string) > $len) {
        $string = substr($string, 0, $len) . "...";
    }
    return $string;
}
