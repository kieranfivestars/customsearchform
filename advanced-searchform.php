<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="hidden" name="search" value="advanced">

		<?php wp_dropdown_categories( array(
			'show_option_all'    => '',
			'show_option_none'   => '',
			'option_none_value'  => '-1',
			'orderby'            => 'ID',
			'order'              => 'ASC',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'child_of'           => 0,
			'exclude'            => '',
			'include'            => '',
			'echo'               => 1,
			'selected'           => 0,
			'hierarchical'       => 0,
			'name'               => 'cat',
			'id'                 => '',
			'class'              => 'postform',
			'depth'              => 0,
			'tab_index'          => 0,
			'taxonomy'           => 'category',
			'hide_if_empty'      => false,
			'value_field'	     => 'term_id',
		) ); ?> 

		<?php wp_dropdown_categories( array (
			'show_option_all'    => '',
			'show_option_none'   => '',
			'option_none_value'  => '-1',
			'orderby'            => 'ID',
			'order'              => 'ASC',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'child_of'           => 0,
			'exclude'            => '',
			'include'            => '',
			'echo'               => 1,
			'selected'           => 0,
			'hierarchical'       => 0,
			'name'               => 'salary',
			'id'                 => 'salary',
			'class'              => 'postform',
			'depth'              => 0,
			'tab_index'          => 0,
			'taxonomy'           => 'salary',
			'hide_if_empty'      => false,
			'value_field'	     => 'name',			
		) ); ?>

		<?php wp_dropdown_categories( array (
			'show_option_all'    => '',
			'show_option_none'   => '',
			'option_none_value'  => '-1',
			'orderby'            => 'ID',
			'order'              => 'ASC',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'child_of'           => 0,
			'exclude'            => '',
			'include'            => '',
			'echo'               => 1,
			'selected'           => 0,
			'hierarchical'       => 0,
			'name'               => 'location',
			'id'                 => 'location',
			'class'              => 'postform',
			'depth'              => 0,
			'tab_index'          => 0,
			'taxonomy'           => 'location',
			'hide_if_empty'      => false,
			'value_field'	     => 'name',			
		) ); ?>
		<input type="submit" id="searchsubmit" value="Search" />
	</div>
</form>
