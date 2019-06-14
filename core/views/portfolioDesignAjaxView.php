<?php
		$previewBGI       = carbon_get_post_meta( get_the_ID(), "background" );
		$client_logo      = carbon_get_post_meta( get_the_ID(), "client_logo" );
		$content_back     = carbon_get_post_meta( get_the_ID(), "content_back" );
		$work_type        = carbon_get_post_meta( get_the_ID(), "work_type" );
		$client_name      = carbon_get_post_meta( get_the_ID(), "client_name" );
		$task_list        = carbon_get_post_meta( get_the_ID(), "task_list" );
		$realisation_list = carbon_get_post_meta( get_the_ID(), "realisation_list" );
		$long_img         = carbon_get_post_meta( get_the_ID(), "long_img" );

	$terms     = get_the_terms( get_the_ID(), "portfolio_type" );

	/**@var WP_Term $current_term */
	$current_term = $terms[0];
	//portfolio__button-tag_color-grey
	//portfolio__button-tag_color-red
	$label_name = carbon_get_term_meta($current_term->term_id, "label_name");
		?>
        <main class="main">
            <div class="portfolioDesign portfolioDesign__color portfolioDesign__color_light-grey">
                <div class="portfolioDesign__image">
                    <div class="portfolioDesign__image-background"
                         style="background-image:url(<?= $previewBGI; ?>)">
                        <div class="container">
                            <div class="portfolioDesign__image-content">
<!--                                <div class="portfolioDesign__button">-->
<!--                                    <a class="button button__color_grey" href="#">-->
<!--                                        <span class="button__text">--><?//= $label_name; ?><!--</span>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <span class="portfolioDesign__image-content-title portfolioDesign__color portfolioDesign__color_white">-->
<!--                                --><?//= get_the_title(); ?>
<!--                                </span>-->
<!--                                <div class="portfolioDesign__image-content-item">-->
<!--                                    <img class="portfolioDesign__image-content-item-text"-->
<!--                                         src="--><?//= $client_logo; ?><!--" alt="Rebox" title=""/>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolioDesign__content"
                     style="background-image:url(<?= $content_back; ?>)">
                    <div class="container">
                        <div class="portfolioDesign__inner">
                            <div class="titleMedium">
                                <h1 class="titleMedium__text text">About project
                                </h1>
                            </div>
                            <P class="portfolioDesign__inner-title"><?= $work_type; ?></P>
                            <div class="portfolioDesign__inner-logo">
                                <div class="portfolioDesign__inner-image">
                                    <img class="portfolioDesign__inner-image-item"
                                         src="<?= $client_logo; ?>" alt="Sushi">
                                </div>
                                <span class="portfolioDesign__inner-name"></span>
                            </div>
                            <div class="portfolioDesign__inner-content">
                                <div class="portfolioDesign__inner-content-item portfolioDesign__color_white">
                                    <span class="portfolioDesign__inner-content-item-title">Client</span>
                                    <P class="portfolioDesign__inner-content-item-text"><?= $client_name; ?></P>
                                </div>
                                <div class="portfolioDesign__inner-content-item">
                                    <span class="portfolioDesign__inner-content-item-title">Tasks</span>
                                    <ul class="portfolioDesign__inner-content-item-list portfolioDesign__color_white">
										<?php foreach ( $task_list as $item ) : ?>
                                            <li class="portfolioDesign__inner-content-item-list-text"><?= $item["task"]; ?></li>
										<?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="portfolioDesign__inner-content-item">
                                    <span class="portfolioDesign__inner-content-item-title">Realisation</span>
                                    <ul class="portfolioDesign__inner-content-item-list portfolioDesign__color_white">
										<?php foreach ( $realisation_list as $item ) : ?>
                                            <li class="portfolioDesign__inner-content-item-list-text"><?= $item["realisation"]; ?></li>
										<?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
<!--                            <img class="portfolioDesign_full" src="--><?//= $long_img; ?><!--">-->
	                        <?php foreach ( $long_img as $item ) : ?>
                                <img class="portfolio-image_full" src="<?= $item["url"]; ?>">
	                        <?php endforeach; ?>
                            <footer>
                                <div class="container">
                                    <div class="footer-line">
                                        <div class="container">
                                            <div class="footer-line__inner">
                                                <div class="footer-line__inner_stroke"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="<?= Assets::getJs('portfolioDesign'); ?>"></script>
		<?

