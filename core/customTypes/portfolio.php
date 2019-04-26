<?php

	add_action( 'init', 'register_post_type_portfolio' );
	function register_post_type_portfolio(){
		register_post_type('portfolio', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Портфолио', // основное название для типа записи
				'singular_name'      => 'проект', // название для одной записи этого типа
				'add_new'            => 'Добавить проект', // для добавления новой записи
				'add_new_item'       => 'Добавить проект', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактировать проект', // для редактирования типа записи
				'new_item'           => 'Новый проект', // текст новой записи
				'view_item'          => 'Просмотр проекта', // для просмотра записи этого типа.
				'search_items'       => 'Поиск проекта', // для поиска по этим типам записи
				'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Not Found in trash', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Портфолио', // название меню
			),
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => null, // зависит от public
			'exclude_from_search' => null, // зависит от public
			'show_ui'             => null, // зависит от public
			'show_in_menu'        => true, // показывать ли в меню адмнки
			'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
			'show_in_nav_menus'   => true, // зависит от public
			'show_in_rest'        => true, // добавить в REST API. C WP 4.7
			//    'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 1,
			'menu_icon'           => 'dashicons-admin-users',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => array('title','thumbnail','editor'), // 'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			//'taxonomies'          => array(),
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		) );
	}