<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	//->where( 'post_template', '=', 'template-web.php' )
	//->set_width( 30 )

	add_action( 'carbon_fields_register_fields', 'crb_attach_portfolio_meta' );
	function crb_attach_portfolio_meta() {

		Container::make( 'post_meta', "Дополнительная информация" )
		         ->where( 'post_type', '=', 'portfolio' )
			     ->add_fields( [
					Field::make( 'image', 'clientLogo', 'Logo' )
						 ->set_value_type( 'url' ),
					Field::make( 'image', 'background', 'Background image' )
						 ->set_value_type( 'url' ),
					Field::make( 'textarea', 'client_name', 'Client' ),
					Field::make( 'complex', 'task_list', 'Tasks' )
					     ->add_fields( 'task', [
							     Field::make( 'text', 'task', 'Task' ),
						     ]
					     ),
					Field::make( 'complex', 'realisation_list', 'Realisations' )
					     ->add_fields( 'realisation', [
							     Field::make( 'text', 'realisation', 'Realisation' ),
						     ]
					     ),
					Field::make( 'image', 'longImg', 'Long Image' )
					     ->set_value_type( 'url' ),
					Field::make( 'image', 'longImg', 'Long Image' )
					     ->set_value_type( 'url' ),
				]
			);
	}

	add_action( 'after_setup_theme', 'crb_load_portfolio_meta' );
	function crb_load_portfolio_meta() {
		\Carbon_Fields\Carbon_Fields::boot();
	}