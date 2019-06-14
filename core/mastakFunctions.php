<?php

    function page_selecting() {
        $my_query   = new WP_Query();
        $pages = $my_query->query(['post_type' => 'page']);

        $news_list = [];
        foreach ($pages as $page) {
            $news_list[$page->ID] = $page->post_title;
        }
        return $news_list;
    }


	/**
	 * Get Post object by post_meta query
	 *
	 * @use         $post = get_post_by_meta( array( meta_key = 'page_name', 'meta_value = 'contact' ) )
	 * @return      Object      WP post object
	 * @since       1.0.4
	 */
	function get_post_by_meta( $args = array() ) {

		// Parse incoming $args into an array and merge it with $defaults - caste to object ##
		$args = ( object ) wp_parse_args( $args );

		// grab page - polylang will take take or language selection ##
		$args = array(
			'meta_query'     => array(
				array(
					'key'   => $args->meta_key,
					'value' => $args->meta_value
				)
			),
			'post_type'      => 'page',
			'posts_per_page' => '1'
		);

		// run query ##
		$posts = get_posts( $args );

		// check results ##
		if ( ! $posts || is_wp_error( $posts ) ) {
			return false;
		}

		// test it ##
		#pr( $posts[0] );

		// kick back results ##
		return $posts[0];

	}

	function singlePortfolioById($id) {
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
	}