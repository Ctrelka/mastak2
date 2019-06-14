<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	add_action( 'wp_ajax_singlePortfolio', 'singlePortfolio' );
	add_action( 'wp_ajax_nopriv_singlePortfolio', 'singlePortfolio' );


	function singlePortfolio() {

		$response       = array();
		$id             = empty( $_POST['portfolioId'] ) ? '' : esc_attr( $_POST['portfolioId'] );
		$portfolio_temp = get_post_meta( $id, "_wp_page_template", true );

		if ( $portfolio_temp == "template-portfolioDev.php" || "template-portfolioDesign.php") {
			$args = ["post_type" => "portfolio", "post__in" =>[$id]];
			$query = new WP_Query($args);
			if ($query->have_posts()){
				$query->the_post();
				if ( $portfolio_temp == "template-portfolioDev.php" ) {
					get_template_part('/core/views/portfolioWebAjaxView' );
				}
				elseif ( $portfolio_temp == "template-portfolioDesign.php" ) {
					get_template_part('/core/views/portfolioDesignAjaxView' );
				}
				wp_reset_postdata();
			}
		}
		wp_die();
	}



