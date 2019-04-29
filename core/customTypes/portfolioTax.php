<?php
	add_action( 'init', 'create_book_taxonomies' );

	function create_book_taxonomies() {
		register_taxonomy( 'portfolio_type', [ 'portfolio' ], [
			'hierarchical' => true,
			'labels'       => [
				'name'              =>  'Типы' ,
				'singular_name'     =>  'Тип' ,
				'search_items'      => 'Искать тип',
				'all_items'         =>  'Все типы' ,
				'parent_item'       => 'Родительский тип',
				'parent_item_colon' =>  'Родительский тип:',
				'edit_item'         => 'Редактировать тип',
				'update_item'       => 'Обноаить тип',
				'add_new_item'      => 'Добавить новый тип',
				'new_item_name'     => 'Новый тип',
				'menu_name'         => 'Типы',
			],
			'show_ui'      => true,
			'query_var'    => true,
			'show_in_rest' => true,
		] );
	}