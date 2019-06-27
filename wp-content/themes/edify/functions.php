<?php
/*
	==========================================
	 Include scripts
	==========================================
*/


//add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');


/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Top Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	//register_nav_menu('Thirdparty', 'Page Navigation');

}

add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5',array('search-form'));

//include("helpers.php");

/*
	==========================================
	 Sidebar function
	==========================================
*/
function awesome_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','awesome_widget_setup');
//add_filter('flash_uploader',create_function('$a','return false;'),5);
function awesome_widget_setup2() {
	
	register_sidebar(
		array(	
			'name'	=> 'Leftbar',
			'id'	=> 'sidebar-2',
			'class'	=> 'custom2',
			'description' => 'Standard Leftbar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','awesome_widget_setup2');

/*
	==========================================
	 Include Walker file
	==========================================
*/


/*
	==========================================
	 Head function
	==========================================
*/
function awesome_remove_version() {
	return '';
}
add_filter('the_generator', 'awesome_remove_version');

/*
	==========================================
	 Custom Post Type
	==========================================
*/

function awesome_custom_post_type (){
	
	$labels = array(
		'name' => 'Courses',
		'singular_name' => 'Courses',
		'add_new' => 'Add Courses',
		'all_items' => 'All Courses',
		'add_new_item' => 'Add Courses',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Courses',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'menu_icon'	     => 'dashicons-welcome-learn-more',
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		// 'taxonomies' => array('category'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('Courses',$args);
}
add_action('init','awesome_custom_post_type');


//Testimonial custom post type

function testimonial_custom_post_type (){

    $labels = array(
        'name' => 'Testimonial',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add Testimonial',
        'all_items' => 'All Testimonial',
        'add_new_item' => 'Add Testimonial',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Testimonial',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'menu_icon'	     => 'dashicons-plus',
        'public' => true,
        'has_archive' => false,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('testimonial',$args);
}
add_action('init','testimonial_custom_post_type');
function awesome_custom_taxonomies() {


	$labels = array(
		'name' => 'Subjects',
		'singular_name' => 'Subjects',
		'search_items' => 'Search Subjects',
		'all_items' => 'All Subjects',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field:',
		'edit_item' => 'Edit Subjects',
		'update_item' => 'Update Subjects',
		'add_new_item' => 'Add New Subjects',
		'new_item_name' => 'New Subjects Name',
		'menu_name' => 'Category Subjects'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'subjects' )
	);

	register_taxonomy('subjects', array('courses'), $args);
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Classes',
		'singular_name' => 'Classes',
		'search_items' => 'Search Classes',
		'all_items' => 'All Classess',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field:',
		'edit_item' => 'Edit Classes',
		'update_item' => 'Update Classes',
		'add_new_item' => 'Add New Classes',
		'new_item_name' => 'New Classes Name',
		'menu_name' => 'Category Classes'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'classes' )
	);

	register_taxonomy('classes', array('courses'), $args);


}

add_action( 'init' , 'awesome_custom_taxonomies' );

/*
	==========================================
	Custom Term Function
	==========================================
*/

function awesome_get_terms( $postID, $term ){
	
	$terms_list = wp_get_post_terms($postID, $term); 
	$output = '';
					
	$i = 0;
	foreach( $terms_list as $term ){ $i++;
		if( $i > 1 ){ $output .= ', '; }
		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}
	
	return $output;
	
}

/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query  The original query.
 * @return object $query The amended query.
 */
function tgm_io_cpt_search( $query ) {
	
    if ( $query->is_search ) {
	$query->set( 'post_type', array( 'treatmentd', 'hospitels', 'doctors') );
    }
    
    return $query;
    
}


