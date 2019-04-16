<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_web_page_meta' );
	function crb_attach_web_page_meta() {

		Container::make( 'post_meta', "Дополнительная информация" )
		         ->where( 'post_type', '=', 'page' )
		         ->where( 'post_template', '=', 'template-web.php' )
		         ->add_fields( [
				         Field::make( 'text', 'crb_subtitle', 'Подзаголовок' ),
				         Field::make( 'textarea', 'crb_desc', 'Описание' ),
				         Field::make( 'complex', 'contact_what_we_do', 'What we do' )
				              ->add_fields( 'item', [
						              Field::make( 'text', 'title', 'Заголовок' )
						                   ->set_width( 30 ),
						              Field::make( 'textarea', 'desc', 'Описание' )
						                   ->set_width( 45 ),
						              Field::make( 'image', 'icon', 'Иконка' )
						                   ->set_value_type('url')
						                   ->set_width( 25 )
					              ]
				              ),
				         Field::make( 'textarea', 'crb_short_bold', 'short bold' ),
				         Field::make( 'textarea', 'crb_big_regular', 'big_regular' ),
				         Field::make( 'textarea', 'crb_order', 'Предлоение' ),
			         ]
		         );
	}

	add_action( 'after_setup_theme', 'crb_load_web_meta' );
	function crb_load_web_meta() {
		\Carbon_Fields\Carbon_Fields::boot();
	}