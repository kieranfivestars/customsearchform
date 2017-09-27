add_action( 'init', 'create_job_taxonomies', 0 );
function create_job_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Salaries'),
		'singular_name'     => _x( 'Salary'),
		'search_items'      => __( 'Search Salaries'),
		'all_items'         => __( 'All Salaries'),
		'parent_item'       => __( 'Parent Salary'),
		'parent_item_colon' => __( 'Parent Salary'),
		'edit_item'         => __( 'Edit Salary'),
		'update_item'       => __( 'Update Salary'),
		'add_new_item'      => __( 'Add New Salary'),
		'new_item_name'     => __( 'New Salary'),
		'menu_name'         => __( 'Salaries'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'salary' ),
	);

	register_taxonomy( 'salary', array( 'post' ), $args );

	$labels = array(
		'name'              => _x( 'Locations'),
		'singular_name'     => _x( 'Location'),
		'search_items'      => __( 'Search Locations'),
		'all_items'         => __( 'All Locations'),
		'parent_item'       => __( 'Parent Location'),
		'parent_item_colon' => __( 'Parent Location'),
		'edit_item'         => __( 'Edit Location'),
		'update_item'       => __( 'Update Location'),
		'add_new_item'      => __( 'Add New Location'),
		'new_item_name'     => __( 'New Location'),
		'menu_name'         => __( 'Locations'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'location' ),
	);

	register_taxonomy( 'location', array( 'post' ), $args );	
}
