<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_portfolio_settings' );
	function crb_attach_portfolio_settings() {
		Container::make( 'theme_options', 'portfolio settings' )
		         ->set_page_parent( "edit.php?post_type=portfolio" )
		         ->add_fields( [
					Field::make( 'text', 'portfolio_first_btn_text', 'first button text'),
					Field::make( 'text', 'portfolio_first_btn_link', 'first button link'),
					Field::make( 'text', 'portfolio_second_btn_text', 'second button text'),
					Field::make( 'text', 'portfolio_second_btn_link', 'second button link'),
					Field::make( 'complex', 'portfolio_list', 'Список партфолио' )
					     ->add_fields( 'portfolio', [
							     Field::make( 'select', 'first_new_id', 'Выберите портфолио' )
							          ->add_options( 'portfolio_selecting' )
							          ->set_width( 50 ),
						     ]
					     )->set_collapsed( true ),
				]
			);
	}

	function crb_load_portfolio_settings() {
		\Carbon_Fields\Carbon_Fields::boot();
	}
	add_action( 'after_setup_theme', 'crb_load_portfolio_settings' );

	function portfolio_selecting(){
		$my_query   = new WP_Query();
		$query_news = $my_query->query( [
			'post_type' => 'portfolio',
		] );

		$news_list = [];
		foreach($query_news as $news) {
			$news_list[ $news->ID ] = $news->post_title;
		}
		return $news_list;
	}