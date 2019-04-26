<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	add_action( 'wp_ajax_singlePortfolio', 'singlePortfolio' );
	add_action( 'wp_ajax_nopriv_singlePortfolio', 'singlePortfolio' );


	function singlePortfolio() {

		$response = array();
		$id       = empty( $_POST['portfolioId'] ) ? '' : esc_attr( $_POST['portfolioId'] );
		$portfolio_temp = get_post_meta($id, "_wp_page_template", true);

		if ($portfolio_temp == "template-portfolioDev.php"){
			getDevPortfolio($id);
        }
		elseif ($portfolio_temp == "template-portfolioDesign.php"){
			getDesignPortfolio($id);
        }
//		?>
<!---->
<!--        <h1>start --><?//= $id ?><!--</h1>-->
<!--        <p>before partial</p>-->
<!--		--><?php //get_template_part( '/core/views/testPartView' ); ?>
<!--        <p>after partial</p>-->
<!--        <p>end</p>-->
<!---->
<!--		--><?php
		wp_die();
	}



