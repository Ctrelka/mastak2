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
			         Field::make( 'select', 'title_color_arch_page', 'Title color(archive page)' )
			              ->add_options( [
				              'portfolio__color portfolio__color_white' => 'light',
				              ' ' => 'dark',
				              ]),
				         Field::make( 'image', 'client_logo', 'Logo' )
				              ->set_value_type( 'url' )
				              ->set_width( 50 ),
				         Field::make( 'image', 'background', 'Background image' )
				              ->set_value_type( 'url' )
				              ->set_width( 50 ),
				         Field::make( 'textarea', 'client_name', 'Client' ),
				         Field::make( 'textarea', 'work_type', 'work type' ),
				         Field::make( 'complex', 'task_list', 'Tasks' )
				              ->add_fields( 'task', [
						              Field::make( 'text', 'task', 'Task' ),
					              ]
				              )->set_collapsed( true ),
				         Field::make( 'complex', 'realisation_list', 'Realisations' )
				              ->add_fields( 'realisation', [
						              Field::make( 'text', 'realisation', 'Realisation' ),
					              ]
				              ),
				         Field::make( 'image', 'content_back', 'Content background' )
				              ->set_value_type( 'url' ),
				         Field::make( 'complex', 'long_img', 'Long Image' )
				              ->add_fields( 'img', [
				              	Field::make( 'image', 'url', 'Image' )
						                   ->set_value_type( 'url' )
					              ]
				              )->set_layout( "tabbed-horizontal" ),
			         ]
		         );
		Container::make( 'post_meta', "Technologies list" )
		         ->where( 'post_type', '=', 'portfolio' )
		         ->where( 'post_template', '=', 'template-portfolioDev.php' )
		         ->add_fields( [

				         Field::make( 'color', 'line_color_start', 'line_color_start' )
				              ->set_width( 50 ),
				         Field::make( 'color', 'line_color_end', 'line_color_end' )
				              ->set_width( 50 ),
				         Field::make( 'color', 'tech_color_start', 'tech_color_start' )
				              ->set_width( 50 ),
				         Field::make( 'color', 'tech_color_end', 'tech_color_end' )
				              ->set_width( 50 ),
				         Field::make( 'complex', 'technologies_list', 'technologies' )
				              ->add_fields( 'technologie', [
						              Field::make( 'text', 'tech_text', 'text' ),
					              ]
				              ),
				         Field::make( 'image', 'mac_book_exam', 'macBook example' )
				              ->set_value_type( 'url' )
				              ->set_width( 25 ),
				         Field::make( 'image', 'iphone_exam', 'iPhone example' )
				              ->set_value_type( 'url' )
				              ->set_width( 25 ),
				         Field::make( 'image', 'front_of_mac', 'front_of_mac' )
				              ->set_value_type( 'url' )
				              ->set_width( 25 ),
			         ]
		         );
	}

	add_action( 'after_setup_theme', 'crb_portfolio_meta' );
	function crb_portfolio_meta() {
		\Carbon_Fields\Carbon_Fields::boot();
	}