<?php
//	// Creating a Deals Custom Post Type
//	function portfolio_tax() {
//		$labels = [
//			'name'              => _x( 'Types', 'taxonomy general name' ),
//			'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
//			'search_items'      => __( 'Search Types' ),
//			'all_items'         => __( 'All Types' ),
//			'parent_item'       => __( 'Parent Type' ),
//			'parent_item_colon' => __( 'Parent Type:' ),
//			'edit_item'         => __( 'Edit Type' ),
//			'update_item'       => __( 'Update Type' ),
//			'add_new_item'      => __( 'Add New Type' ),
//			'new_item_name'     => __( 'New Type Name' ),
//			'menu_name'         => __( 'Types' ),
//		];
//
//		register_taxonomy( 'type', [ 'portfolio','post' ], [
//			'labels'             => $labels,
//			'public'             => true,
//			'show_ui'            => true,
//			'show_in_menu'       => true,
//			'show_in_nav_menus'  => true,
//			'show_in_rest'       => true,
//			'hierarchical'       => false,
//			'show_admin_column'  => true,
//			'show_tagcloud'      => true,
//			'publicly_queryable' => true,
//			'rest_base'          => true,
////			'_builtin'           => true,
//		] );
//	}
//
//	add_action( 'init', 'portfolio_tax' );

	// хук, через который подключается функция
	// регистрирующая новые таксономии (create_book_taxonomies)
	add_action( 'init', 'create_book_taxonomies' );

	// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
	function create_book_taxonomies(){

		// Добавляем древовидную таксономию 'genre' (как категории)
		register_taxonomy('genre', array('portfolio'), array(
			'hierarchical'  => true,
			'labels'        => array(
				'name'              => _x( 'Genres', 'taxonomy general name' ),
				'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
				'search_items'      =>  __( 'Search Genres' ),
				'all_items'         => __( 'All Genres' ),
				'parent_item'       => __( 'Parent Genre' ),
				'parent_item_colon' => __( 'Parent Genre:' ),
				'edit_item'         => __( 'Edit Genre' ),
				'update_item'       => __( 'Update Genre' ),
				'add_new_item'      => __( 'Add New Genre' ),
				'new_item_name'     => __( 'New Genre Name' ),
				'menu_name'         => __( 'Genre' ),
			),
			'show_ui'       => true,
			'query_var'     => true,
						'show_in_rest'       => true,
			//'rewrite'       => array( 'slug' => 'the_genre' ), // свой слаг в URL
		));

		// Добавляем НЕ древовидную таксономию 'writer' (как метки)
		register_taxonomy('writer', 'portfolio',array(
			'hierarchical'  => false,
			'labels'        => array(
				'name'                        => _x( 'Writers', 'taxonomy general name' ),
				'singular_name'               => _x( 'Writer', 'taxonomy singular name' ),
				'search_items'                =>  __( 'Search Writers' ),
				'popular_items'               => __( 'Popular Writers' ),
				'all_items'                   => __( 'All Writers' ),
				'parent_item'                 => null,
				'parent_item_colon'           => null,
				'edit_item'                   => __( 'Edit Writer' ),
				'update_item'                 => __( 'Update Writer' ),
				'add_new_item'                => __( 'Add New Writer' ),
				'new_item_name'               => __( 'New Writer Name' ),
				'separate_items_with_commas'  => __( 'Separate writers with commas' ),
				'add_or_remove_items'         => __( 'Add or remove writers' ),
				'choose_from_most_used'       => __( 'Choose from the most used writers' ),
				'menu_name'                   => __( 'Writers' ),
			),
			'show_ui'       => true,
			'query_var'     => true,
						'show_in_rest'       => true,
			//'rewrite'       => array( 'slug' => 'the_writer' ), // свой слаг в URL
		));
	}