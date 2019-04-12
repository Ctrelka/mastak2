<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_team_page_meta' );
	function crb_attach_team_page_meta() {

		Container::make( 'post_meta', "Дополнительная информация" )
		         ->where( 'post_type', '=', 'page' )
		         ->where( 'post_template', '=', 'template-team.php' )
		         ->add_fields( [
				         Field::make( 'textarea', 'crb_text', 'Текст' ),
				         Field::make( 'text', 'crb_button_link', 'Ссылка' ),
				         Field::make( 'image', 'top_img', 'img 1' )
				              ->set_value_type( 'url' )
				              ->set_width( 30 ),
				         Field::make( 'image', 'middle_img', 'img 2' )
				              ->set_value_type( 'url' )
				              ->set_width( 30 ),
				         Field::make( 'image', 'button_img', 'img 3' )
				              ->set_value_type( 'url' )
				              ->set_width( 30 ),
			         ]
		         );
	}

	add_action( 'after_setup_theme', 'crb_load_team_meta' );
	function crb_load_team_meta() {
		\Carbon_Fields\Carbon_Fields::boot();
	}