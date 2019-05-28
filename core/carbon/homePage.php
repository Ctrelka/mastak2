<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_home_page_meta' );
	function crb_attach_home_page_meta() {

		Container::make( 'post_meta', "Основная информация" )
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
		         ] );

		Container::make( 'post_meta', 'Секция "Development process"' )
		         ->where( 'post_type', '=', 'page' )
		         ->where( 'post_template', '=', 'template-home.php' )
		         ->add_fields( [
				         Field::make( 'text', 'crb_dev_subtitle', 'Подзаголовок' ),
				         Field::make( 'complex', 'contact_what_we_do', 'Процесс' )
					         ->set_collapsed( true )
				              ->add_fields( 'item', [
					              Field::make( 'text', 'title', 'Заголовок' )
					                   ->set_width( 30 ),
					              Field::make( 'image', 'icon', 'Иконка' )
					                   ->set_value_type('url')
					                   ->set_width( 25 ),
					              Field::make( 'complex', 'crb_desc_item', 'Описание' )
					                   ->set_layout( "tabbed-horizontal" )
					                   ->add_fields( [
						                   Field::make( 'text', 'text', "text" ),
					                   ]),
					              ]),
				         Field::make( 'separator', 'crb_sites_type_sep', 'Типы сайтов' ),
				         Field::make( 'text', 'crb_sites_title', 'Заголовок' ),
				         Field::make( 'text', 'crb_sites_subtitle', 'Подзаголовок' ),
				         Field::make( 'complex', 'sites_type', 'site type' )
				              ->set_collapsed( true )
					         ->set_max( 4 )
				              ->add_fields( [
					              Field::make( 'text', 'title', "Заголовок" ),
					              Field::make( 'text', 'subtitle', "Подзаголовок" ),
					              Field::make( 'complex', 'list_item', "Список" )
						               ->set_layout( "tabbed-horizontal" )
					                   ->add_fields( [
						                   Field::make( 'text', 'text', "контент" ),
					                   ] ),
				              ] ),
				         Field::make( 'separator', 'crb_techno_sep', 'Технологии' ),
				         Field::make( 'color', 'crb_line_start', 'Старт градиетна для линии' ),
				         Field::make( 'color', 'crb_line_end', 'Конец градиетна для линии' ),
				         Field::make( 'color', 'crb_points_start', 'Старт градиетна для кругов' ),
				         Field::make( 'color', 'crb_points_end', 'Конец градиетна для кругов' ),
				         Field::make( 'complex', 'technology', 'Технология' )
					         ->set_layout( "tabbed-horizontal" )
				              ->add_fields( [
					              Field::make( 'text', 'text', "Название" ),
				              ]),
				         Field::make( 'separator', 'crb_last_slider', 'Слайдер' ),
				         Field::make( 'complex', 'slide', 'Слайд' )
				              ->set_layout( "tabbed-horizontal" )
				              ->add_fields( [
					              Field::make( 'text', 'text', "Текст" ),
				              ]),
			         ]
		         );

		Container::make( 'post_meta', 'Секция "graphic Design"' )
		         ->where( 'post_type', '=', 'page' )
		         ->where( 'post_template', '=', 'template-home.php' )
		         ->add_fields( [

				         Field::make( 'text', 'crb_des_title', 'Заголовок' ),
				         Field::make( 'text', 'crb_des_subtitle', 'Подзаголовок' ),
				         Field::make( 'textarea', 'crb_des_desc', 'Описание' ),
				         Field::make( 'complex', 'des_offers', 'what we do' )
				              ->set_layout( "tabbed-horizontal" )
				              ->add_fields( 'item', [
					              Field::make( 'text', 'des_title', 'Заголовок' )
					                   ->set_width( 30 ),
					              Field::make( 'image', 'des_icon', 'Иконка' )
					                   ->set_value_type('url')
					                   ->set_width( 25 ),
					              Field::make( 'textarea', 'crb_des_text', 'Текст' ),
				              ]),
				         Field::make( 'textarea', 'crb_des_short_bold', 'Параграф (жирный текст)' ),
				         Field::make( 'textarea', 'crb_des_big_regular', 'Параграф (обычный текст)' ),
				         Field::make( 'textarea', 'crb_des_order', 'Параграф (конец страницы)' ),
				         Field::make( 'complex', 'des_slider_end', 'Сдлайдер' )
				              ->set_layout( "tabbed-horizontal" )
				              ->set_collapsed( true )
				              ->add_fields( 'slide', [
					              Field::make( 'textarea', 'crb_des_text', 'Текст' ),
				              ]),
			         ]
		         );
	}

	add_action( 'after_setup_theme', 'crb_load_home_meta' );
	function crb_load_home_meta() {
		\Carbon_Fields\Carbon_Fields::boot();
	}