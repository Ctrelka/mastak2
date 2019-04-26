<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	add_action( 'wp_ajax_singlePortfolio', 'singlePortfolio' );
	add_action( 'wp_ajax_nopriv_singlePortfolio', 'singlePortfolio' );


	function singlePortfolio() {

		$response = array();
		$id       = empty( $_POST['portfolioId'] ) ? '' : esc_attr( $_POST['portfolioId'] );

		?>

        <h1>start <?= $id ?></h1>
        <p>before partial</p>
		<?php get_template_part( '/core/views/testPartView' ); ?>
        <p>after partial</p>
        <p>end</p>

		<?php
		wp_die();
	}



