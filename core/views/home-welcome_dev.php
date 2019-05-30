<?php
	$web_subtitle = carbon_get_post_meta(get_the_ID(), "crb_dev_subtitle");
	$contact_what_we_do = carbon_get_post_meta(get_the_ID(), "dev_process_list");
	$sites_title = carbon_get_post_meta(get_the_ID(), "crb_sites_title");
	$sites_subtitle = carbon_get_post_meta(get_the_ID(), "crb_sites_subtitle");
	$sites_type = carbon_get_post_meta(get_the_ID(), "sites_type");

	$line_start = carbon_get_post_meta(get_the_ID(), "crb_line_start");
	$line_end = carbon_get_post_meta(get_the_ID(), "crb_line_end");
	$points_start = carbon_get_post_meta(get_the_ID(), "crb_points_start");
	$points_end = carbon_get_post_meta(get_the_ID(), "crb_points_end");
	$points_start_rgb  =carbon_hex_to_rgba( $points_start );
	$points_end_rgb  =carbon_hex_to_rgba( $points_end );

	$technology = carbon_get_post_meta(get_the_ID(), "technology");

	$slides = carbon_get_post_meta(get_the_ID(), "slide");


?>
<div class="welcome-dev">
    <img class="welcome__scroll" src="/wp-content/themes/mastak2/src/icons/download.d5388e.svg" alt="welcome" title=""/>
    <div class="process">
        <div class="container">
            <div class="process__inner">
                <div class="titleMedium">
                    <h1 class="titleMedium__text text">Development process
                    </h1>
                </div>
                <div class="process__content">
                    <div class="process__description"><?= $web_subtitle;?></div>
                    <div class="process__snake">
                        <div class="line1"></div>
                        <div class="b-circle">
                            <div class="b-circle-arc">
                                <div class="b-circle-arc-path b-circle-arc-path-clipped"></div>
                            </div>
                        </div>
                        <div class="line2"></div>
                        <div class="b-circle2">
                            <div class="b-circle-arc2">
                                <div class="b-circle-arc-path2 b-circle-arc-path-clipped2"></div>
                            </div>
                        </div>
                        <div class="line3"></div>
                        <div class="b-circle3">
                            <div class="b-circle-arc3">
                                <div class="b-circle-arc-path3 b-circle-arc-path-clipped3"></div>
                            </div>
                        </div>
                        <div class="line4"></div>
                        <div class="b-circle4">
                            <div class="b-circle-arc4">
                                <div class="b-circle-arc-path4 b-circle-arc-path-clipped4"></div>
                            </div>
                        </div>
                        <div class="b-circle5">
                            <div class="b-circle-arc5">
                                <div class="b-circle-arc-path5 b-circle-arc-path-clipped5"></div>
                            </div>
                        </div>
                        <div class="b-circle6">
                            <div class="b-circle-arc6">
                                <div class="b-circle-arc-path6 b-circle-arc-path-clipped6"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process__items">
	                    <?php
		                    $counter =0;
		                    foreach ( $contact_what_we_do as $item ) :
		                    $counter++;
	                    ?>
                        <div class="process__item">
                            <div class="process__image-wrapper">
                                <img class="process__image" src="<?= $item["icon"]?>" alt="lamp" title=""/>
                            </div>
                            <div class="process__item-title" data-numeral="<?= $counter; ?>"><?= $item["title"]?></div>
                            <ol class="process__list">
	                            <?php foreach ( $item["crb_desc_item"] as $point ) :?>
                                    <li class="process__paragraph"><?= $point["text"];?></li>
	                            <?php endforeach; ?>
                            </ol>
                        </div>

		                    <?php endforeach; ?>
                    </div>
                    <div class="process__description-start">your project
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="types">
        <div class="container">
            <div class="types__inner">
                <div class="titleMedium">
                    <h1 class="titleMedium__text text"><?= $sites_title; ?></h1>
                </div>
                <div class="types__content">
                    <div class="types__description"><?= $sites_subtitle; ?></div>
                    <div class="types__items">
                        <?php
	                        foreach ( $sites_type as $type ) :
                                $title = $type["title"];
		                        $type_subtitle = $type["subtitle"];
		                        $list_items = $type["list_item"];
                        ?>
                        <div class="types__item">
                            <div class="types__item-title"><?= $title; ?></div>
                            <div class="types__item-description"><?= $type_subtitle; ?></div>
                            <ul class="types__list">
                                <?php foreach ( $list_items as $site_point ) :?>
                                <li class="types__paragraph"><?= $site_point["text"]; ?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="technologiesHome">
        <div class="container">
            <ul class="technologiesHome__list"
                data-color-start="rgb(<?=$points_start_rgb["red"]; ?>,<?=$points_start_rgb["green"]; ?>,<?=$points_start_rgb["blue"]; ?>)"
                data-color-end="rgb(<?=$points_end_rgb["red"]; ?>,<?=$points_end_rgb["green"]; ?>,<?=$points_end_rgb["blue"]; ?>)"
                data-wrapper-color="linear-gradient(to right, <?= $line_start; ?>, <?= $line_end; ?>)">
                <?php foreach ( $technology as $techno ) :?>
                <li class="technologiesHome__item">
                    <span class="technologiesHome__name"><?= $techno["text"]; ?></span>
                    <span class="technologiesHome__addition "></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="swiperWe">
        <div class="container">
            <div class="swiperWe__content">
                <canvas id="myCanvas">
                </canvas>
                <div class="swiperWe__inner">
                    <div class="swiperWe__title">we
                    </div>
                    <div class="swiperWe__container swiper-container">
                        <div class="swiperWe__wrapper swiper-wrapper">

                            <?php foreach ( $slides as $slide ) :?>
                                <div class="swiperWe__slide swiper-slide"><?= $slide["text"]; ?></div>
	                        <?php endforeach; ?>

                        </div>
                        <div class="swiperWe__pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-line">
        <div class="container">
            <div class="footer-line__inner">
                <div class="footer-line__inner_stroke"></div>
            </div>
        </div>
    </div>
</div>