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
				]
			);
	}

	function crb_load_portfolio_settings() {
		\Carbon_Fields\Carbon_Fields::boot();
	}
	add_action( 'after_setup_theme', 'crb_load_portfolio_settings' );