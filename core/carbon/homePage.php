<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_home_page_meta' );
	function crb_attach_home_page_meta() {

		Container::make( 'post_meta', "Дополнительная информация" )
		         ->where( 'post_type', '=', 'page' )
		         ->where( 'post_template', '=', 'template-home.php' )
//			->add_fields([
//				Field::make( 'text', 'crb_title_first_slide', 'Заготовок' ),
//			]);
		         ->add_tab( 'Первый слайд', [
			         Field::make( 'text', 'crb_title_first_slide', 'Заготовок' ),
			         Field::make( 'text', 'crb_subtitle_first_slide', 'Подзаготовок' ),
			         Field::make( 'textarea', 'crb_description_first_slide', 'Описание' ),
			         Field::make( 'text', 'crb_link_first_slide', 'Ссылка' ),
			         Field::make( 'image', 'crb_img_first_slide', 'Изображение' )
			              ->set_value_type( 'url' )
			              ->set_width( 30 )
		         ] )
		         ->add_tab( 'Второй слайд', [
			         Field::make( 'text', 'crb_title_second_slide', 'Заготовок' ),
			         Field::make( 'text', 'crb_subtitle_second_slide', 'Подзаготовок' ),
			         Field::make( 'textarea', 'crb_description_second_slide', 'Описание' ),
			         Field::make( 'text', 'crb_link_second_slide', 'Ссылка' ),
			         Field::make( 'image', 'crb_img_second_slide', 'Изображение' )
			              ->set_value_type( 'url' )
			              ->set_width( 30 ),
		         ] )
		         ->add_tab( 'Ссылки', [
			         Field::make( 'text', 'crb_text_first_link', 'Текст первой ссылки' ),
			         Field::make( 'text', 'crb_link_first_link', 'Первоя ссылка' ),
			         Field::make( 'text', 'crb_text_second_link', 'Текст второй ссылки' ),
			         Field::make( 'text', 'crb_link_second_link', 'Второй ссылка' ),
		         ] )
		;
	}

	add_action( 'after_setup_theme', 'crb_load_home_meta' );
	function crb_load_home_meta() {
		\Carbon_Fields\Carbon_Fields::boot();
	}