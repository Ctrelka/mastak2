<?php
	get_header( "noColor" );

	$terms = get_terms( [
		'taxonomy'   => 'portfolio_type',
		'hide_empty' => false,
	] );

	//	portfolio_first_btn_text
	$portfolio_first_btn_text = carbon_get_theme_option( "portfolio_first_btn_text" );
	//portfolio_first_btn_link
	$portfolio_first_btn_link = carbon_get_theme_option( "portfolio_first_btn_link" );
	//portfolio_second_btn_text
	$portfolio_second_btn_text = carbon_get_theme_option( "portfolio_second_btn_text" );
	//portfolio_second_btn_link
	$portfolio_second_btn_link = carbon_get_theme_option( "portfolio_second_btn_link" );

	$portfolio_list = carbon_get_theme_option( "portfolio_list" );
	get_template_part( "/core/views/headerView", "portfolio" ); ?>
    <main class="main">
        <div class="portfolio">
            <div class="portfolio__inner">
                <div class="portfolio__slide-menu">
                    <div class="portfolio__title">
                        <div class="titleLittle">
                            <h1 class="titleLittle__text text">portfolio
                            </h1>
                        </div>
                    </div>
                    <ul class="portfolio__slide-menu-list controls">
                        <li class="portfolio__slide-menu-list-item portfolio__slide-menu-list-item portfolio__slide-menu-list-item_active portfolio__slide-menu-list-item portfolio__slide-menu-list-item_active-menu_active control"
                            data-filter="all">
                            <a>All projects</a>
                            <span class="portfolio__slide-menu-desc">All projects</span>
                        </li>
						<?php
							/**
							 * @var WP_Term $term
							 */
							foreach ( $terms as $term ) :
								?>
                                <li class="portfolio__slide-menu-list-item control" data-filter=".<?= $term->slug ?>">
                                    <a><?= $term->name ?></a>
                                    <span class="portfolio__slide-menu-desc"><?= $term->name ?></span>
                                </li>
							<?php endforeach; ?>
                    </ul>
                </div>
                <div class="portfolio__portfolio-container">
                    <div class="swiper-wrapper portfolio-wrapper">
	                    <?php
                            if (count($portfolio_list ) > 1):
		                    foreach ( $portfolio_list as $item ) {
			                    $args = array(
				                    'post_type' => 'portfolio',
				                    'post__in' => [$item["first_new_id"]]
			                    );
			                    $query = new WP_Query( $args );

			                    if ( $query->have_posts() ):
				                    while ( $query->have_posts() ):
					                    $query->the_post();
					                    get_template_part( '/core/views/single_portfolio_arch' );
				                    endwhile;
				                    wp_reset_postdata();
			                    endif;
		                    }
		                    endif;
	                    ?>
                        <div class="portfolio__portfolio-item swiper-slide">
                            <div class="portfolio__portfolio-item-container">
                                <div class="portfolio__navigation-container">
                                    <div class="portfolio__navigation">
                                        <a class="portfolio__nav" href="<?= esc_url($portfolio_first_btn_link); ?>">
                                            <?= $portfolio_first_btn_text; ?>
                                        </a>
                                        <a class="portfolio__nav" href="<?= esc_url($portfolio_second_btn_link)?>">
                                            <?= $portfolio_second_btn_text; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testDiva"><?php
                if (!empty($_GET['id'])){
                    singlePortfolioById($_GET['id']);
                }
            ?></div>
    </main>
<?php
	//	get_template_part( '/core/views/footerView' );
	get_footer();
?><?php
