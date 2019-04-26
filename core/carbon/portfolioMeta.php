<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_portfolio_meta' );
	function crb_attach_portfolio_meta() {

		Container::make( 'post_meta', "Дополнительная информация" )
		         ->where( 'post_type', '=', 'portfolio' )
		         ->add_fields( [
				         Field::make( 'text', 'crb_client', 'Клиент' ),
//				         Field::make( 'complex', 'contact_what_we_do', 'What we do' )
//				              ->add_fields( 'item', [
//						              Field::make( 'text', 'title', 'Заголовок' )
//						                   ->set_width( 30 ),
//						              Field::make( 'textarea', 'desc', 'Описание' )
//						                   ->set_width( 45 ),
//						              Field::make( 'image', 'icon', 'Иконка' )
//						                   ->set_value_type('url')
//						                   ->set_width( 25 )
//					              ]
//				              ),
			         ]
		         );
	}

	add_action( 'after_setup_theme', 'crb_portfolio_meta' );
	function crb_portfolio_meta() {
		\Carbon_Fields\Carbon_Fields::boot();
	}