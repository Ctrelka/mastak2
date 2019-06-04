<?php
    $crb_des_title = carbon_get_post_meta(get_the_ID(),"crb_des_title");
	$crb_des_subtitle = carbon_get_post_meta(get_the_ID(),"crb_des_subtitle");
	$crb_des_desc = carbon_get_post_meta(get_the_ID(),"crb_des_desc");
	$des_offers = carbon_get_post_meta(get_the_ID(),"des_offers");
	$crb_des_short_bold = carbon_get_post_meta(get_the_ID(),"crb_des_short_bold");
	$crb_des_big_regular = carbon_get_post_meta(get_the_ID(),"crb_des_big_regular");
	$crb_des_order = carbon_get_post_meta(get_the_ID(),"crb_des_order");
	$crb_des_order = carbon_get_post_meta(get_the_ID(),"crb_des_order");
	$des_slider_end = carbon_get_post_meta(get_the_ID(),"des_slider_end");
//	var_dump($des_offers );
?>
<div class="welcome-web">
    <img class="welcome__scroll" src="/wp-content/themes/mastak2/src/icons/download.d5388e.svg" alt="welcome" title=""/>
    <div class="homeWeb">
        <div class="container">
            <div class="homeWeb__inner">
                <div class="titleMedium">
                    <h1 class="titleMedium__text text"><?= $crb_des_title; ?></h1>
                </div>
                <p class="homeWeb__inner-title"><?= $crb_des_subtitle; ?></p>
                <p class="homeWeb__inner-text"><?= $crb_des_desc; ?></p>
                <span class="homeWeb__inner-preview">What we do:</span>
                <div class="homeWeb__inner-items">
                    <?php
                        $counter = 1;
                        foreach ( $des_offers as $des_offer ) :
                        $des_title = $des_offer["des_title"];
	                    $des_icon = $des_offer["des_icon"];
	                    $crb_des_text = $des_offer["crb_des_text"];
                    ?>
                    <div class="homeWeb__inner-items-content">
                        <div class="homeWeb__inner-items-content-image">
                            <span class="homeWeb__inner-items-content-image-number"><?= $counter++;?></span>
                            <div class="homeWeb__inner-items-content-image-container">
                                <img class="homeWeb__inner-items-content-image-item"
                                     src="<?= $des_icon; ?>" alt="Item" title=""/>
                            </div>
                        </div>
                        <p class="homeWeb__inner-items-content-title"><?= $des_title; ?></p>
                        <p class="homeWeb__inner-items-content-text"><?= $crb_des_text; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="homeWeb__inner-container">
                    <div class="homeWeb__inner-text-content">
                        <p class="homeWeb__inner-text-title"><?= $crb_des_short_bold; ?></p>
                        <p class="homeWeb__inner-text-preview"><?= $crb_des_big_regular; ?></p>
                    </div>
                    <div class="homeWeb__inner-text-slider">
                        <div class="swiperWeWeb">
                            <div class="container">
                                <div class="swiperWeWeb__content">
                                    <canvas id="myCanvas2">
                                    </canvas>
                                    <div class="swiperWeWeb__inner">
                                        <div class="swiperWeWeb__title">we
                                        </div>
                                        <div class="swiperWeWeb__container swiper-container">
                                            <div class="swiperWeWeb__wrapper swiper-wrapper">
                                                <?php foreach ( $des_slider_end as $item ) :?>
                                                <div class="swiperWeWeb__slide swiper-slide"><?= $item["crb_des_text"] ?></div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="swiperWeWeb__pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="homeWeb__inner-text-end"><?= $crb_des_order; ?></p>
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