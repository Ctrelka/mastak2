<?php
	$previewBGI       = carbon_get_post_meta( get_the_ID(), "background" );
	$client_logo      = carbon_get_post_meta( get_the_ID(), "client_logo" );
	$content_back     = carbon_get_post_meta( get_the_ID(), "content_back" );
	$work_type        = carbon_get_post_meta( get_the_ID(), "work_type" );
	$client_name      = carbon_get_post_meta( get_the_ID(), "client_name" );
	$task_list        = carbon_get_post_meta( get_the_ID(), "task_list" );
	$realisation_list = carbon_get_post_meta( get_the_ID(), "realisation_list" );
	$long_img         = carbon_get_post_meta( get_the_ID(), "long_img" );

	$technologies_list = carbon_get_post_meta( get_the_ID(), "technologies_list" );
	$line_color_start  = carbon_get_post_meta( get_the_ID(), "line_color_start" );
	$line_color_end    = carbon_get_post_meta( get_the_ID(), "line_color_end" );

	$hex_tech_color_start = carbon_get_post_meta( get_the_ID(), "tech_color_start" );
	$hex_tech_color_end   = carbon_get_post_meta( get_the_ID(), "tech_color_end" );
	$rgb_ts               = carbon_hex_to_rgba( $hex_tech_color_start );
	$rgb_te               = carbon_hex_to_rgba( $hex_tech_color_end );

	$mac_book_exam = carbon_get_post_meta( get_the_ID(), "mac_book_exam" );
	$iphone_exam   = carbon_get_post_meta( get_the_ID(), "iphone_exam" );
	$front_of_mac  = carbon_get_post_meta( get_the_ID(), "front_of_mac" );

	//	get_template_part( '/core/views/headerView', "portfolio" );
?>
    <main class="main">
        <div class="portfolioDev portfolioDev__color portfolioDev__color_light-grey">
            <div class="portfolioDev__image">
                <div class="portfolioDev__image-background"
                     style="background-image:url(<?= $previewBGI; ?>)">
                    <div class="container">
                        <div class="portfolioDev__image-content">
                            <div class="portfolioDev__button">
                                <a class="button button__color_red" href="#">
                                    <span class="button__text">web</span>
                                </a>
                            </div>
                            <span class="portfolioDev__image-content-title"><?= get_the_title(); ?></span>
                            <div class="portfolioDev__image-content-item">
                                <img class="portfolioDev__image-content-item-text"
                                     src="<?= $client_logo; ?>" alt="Rebox"
                                     title=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolioDev__content" style="background: #fff">
                <div class="container">
                    <div class="portfolioDev__inner">
                        <div class="titleMedium">
                            <h1 class="titleMedium__text text">About project
                            </h1>
                        </div>
                        <P class="portfolioDev__inner-title"><?= $work_type; ?></P>
                        <div class="portfolioDev__inner-logo">
                            <div class="portfolioDev__inner-image">
                                <img class="portfolioDev__inner-image-item"
                                     src="<?= $client_logo; ?>" alt="Sushi">
                            </div>
                            <span class="portfolioDev__inner-name"></span>
                        </div>
                        <div class="portfolioDev__inner-content">
                            <div class="portfolioDev__inner-content-item">
                                <SPAN class="portfolioDev__inner-content-item-title">Client</SPAN>
                                <P class="portfolioDev__inner-content-item-text"><?= $client_name; ?></P>
                            </div>
                            <div class="portfolioDev__inner-content-item">
                                <span class="portfolioDev__inner-content-item-title">Tasks</span>
                                <ul class="portfolioDev__inner-content-item-list">
									<?php foreach ( $task_list as $item ) : ?>
                                        <li class="portfolioDev__inner-content-item-list-text"><?= $item["task"]; ?></li>
									<?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="portfolioDev__inner-content-item">
                                <span class="portfolioDev__inner-content-item-title">Realisation</span>
                                <ul class="portfolioDev__inner-content-item-list">
									<?php foreach ( $realisation_list as $item ) : ?>
                                        <li class="portfolioDev__inner-content-item-list-text"><?= $item["realisation"]; ?></li>
									<?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="portfolioDev__inner-content-item">
                                <SPAN class="portfolioDev__inner-content-item-title">Technologies</SPAN>
                            </div>
                        </div>
                        <div class="technologies">
                            <ul class="technologies__list"
                                data-color-start="rgb(<?= $rgb_ts["red"] . "," . $rgb_ts["green"] . "," . $rgb_ts["blue"] ?>)"
                                data-color-end="rgb(<?= $rgb_te["red"] . "," . $rgb_te["green"] . "," . $rgb_te["blue"] ?>)"
                                data-wrapper-color="linear-gradient(to right, <?= $line_color_start; ?>, <?= $line_color_end; ?>)">
								<?php foreach ( $technologies_list as $item ) : ?>
                                    <li class="technologies__item">
                                        <span class="technologies__name"><?= $item["tech_text"]; ?></span>
                                        <span class="technologies__addition "></span>
                                    </li>
								<?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="portfolio-image">
                            <div class="portfolio-image__wrapper">
                                <div class="portfolio-image__notebook">
                                    <img class="portfolio-image__notebook-image"
                                         src="/wp-content/themes/mastak2/src/icons/pk.6ee0f1.png">
                                    <img class="portfolio-image__addition-image"
                                         src="<?= $front_of_mac; ?>">
                                    <div class="portfolio-image__main-notebook">
                                        <img class="portfolio-image__main-notebook-image"
                                             src="<?= $mac_book_exam; ?>">
                                    </div>
                                    <div class="portfolio-image__phone">
                                        <img class="portfolio-image__phone-image"
                                             src="/wp-content/themes/mastak2/src/icons/iphone-kg.daf126.png">
                                        <img class="portfolio-image__shadow-iphone"
                                             src="/wp-content/themes/mastak2/src/icons/shadow.3329be.svg">
                                        <div class="portfolio-image__main-iphone">
                                            <img class="portfolio-image__main-iphone-image"
                                                 src="<?= $iphone_exam; ?>">
                                        </div>
                                    </div>
                                    <img class="portfolio-image__shadow"
                                         src="/wp-content/themes/mastak2/src/icons/shadow.3329be.svg">
                                </div>
                            </div>
                            <img class="portfolio-image_full" src="<?= $long_img; ?>">
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
        </div>
    </main>
    <script src="<?= Assets::getJs( 'portfolioDev' ); ?>"></script>
<?

