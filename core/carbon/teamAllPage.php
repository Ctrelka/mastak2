<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_team_all_page_meta' );
	function crb_attach_team_all_page_meta() {

		Container::make( 'post_meta', "Дополнительная информация" )
		         ->where( 'post_type', '=', 'page' )
		         ->where( 'post_template', '=', 'template-teamAll.php' )
		         ->add_fields( [
				         Field::make( 'separator', 'first_section_op_sep', __( 'Секция №1' ) )
				              ->set_width( 50 ),
				         Field::make( 'image', 'first_s_img', 'Изображение' )
				              ->set_value_type( 'url' )
				              ->set_width( 50 ),
				         Field::make( 'text', 'first_s_title_left', 'Заголовок' ),
				         Field::make( 'textarea', 'first_s_text_left', 'Текст' ),
				         Field::make( 'text', 'first_s_title_center', 'Заголовок' ),
				         Field::make( 'textarea', 'first_s_text_center', 'Текст' ),
				         Field::make( 'text', 'first_s_title_right', 'Заголовок' ),
				         Field::make( 'textarea', 'first_s_text_right', 'Текст' ),

				         Field::make( 'separator', 'second_section_op_sep', __( 'Секция №2' ) )
				              ->set_width( 50 ),
				         Field::make( 'image', 'second_s_img', 'Изображение' )
				              ->set_value_type( 'url' )
				              ->set_width( 50 ),
				         Field::make( 'text', 'second_s_title_left', 'Заголовок' ),
				         Field::make( 'textarea', 'second_s_text_left', 'Текст' ),
				         Field::make( 'text', 'second_s_title_right', 'Заголовок' ),
				         Field::make( 'textarea', 'second_s_text_right', 'Текст' ),

				         Field::make( 'separator', 'third_section_op_sep', __( 'Секция №3' ) )
				              ->set_width( 50 ),
				         Field::make( 'image', 'third_s_img', 'Изображение' )
				              ->set_value_type( 'url' )
				              ->set_width( 50 ),
				         Field::make( 'textarea', 'third_s_text', 'Текст' ),
			         ]
		         );
	}

	add_action( 'after_setup_theme', 'crb_load_team_all_meta' );
	function crb_load_team_all_meta() {
		\Carbon_Fields\Carbon_Fields::boot();
	}