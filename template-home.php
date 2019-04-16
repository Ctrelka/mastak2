<?php
	/**
	 * Template Name: Home Template
	 */
	get_header( "noColor" );

	$title_first_slide = carbon_get_post_meta(get_the_ID(),'crb_title_first_slide');
	$subtitle_first_slide = carbon_get_post_meta(get_the_ID(),'crb_subtitle_first_slide');
	$desc_first_slide = carbon_get_post_meta(get_the_ID(),'crb_description_first_slide');
	$link_first_slide = carbon_get_post_meta(get_the_ID(),'crb_link_first_slide');
	$img_first_slide = carbon_get_post_meta(get_the_ID(),'crb_img_first_slide');

	$title_second_slide = carbon_get_post_meta(get_the_ID(),'crb_title_second_slide');
	$subtitle_second_slide = carbon_get_post_meta(get_the_ID(),'crb_subtitle_second_slide');
	$desc_second_slide = carbon_get_post_meta(get_the_ID(),'crb_description_second_slide');
	$link_second_slide = carbon_get_post_meta(get_the_ID(),'crb_link_second_slide');
	$img_second_slide = carbon_get_post_meta(get_the_ID(),'crb_img_second_slide');

	$text_first_link = carbon_get_post_meta(get_the_ID(),'crb_text_first_link');
	$link_first_link = carbon_get_post_meta(get_the_ID(),'crb_link_first_link');
	$text_second_link = carbon_get_post_meta(get_the_ID(),'crb_text_second_link');
	$link_second_link = carbon_get_post_meta(get_the_ID(),'crb_link_second_link');

	get_template_part( '/core/views/headerView' ); ?>
    <main class="main">
        <div class="welcome">
            <div class="container">
                <div class="welcome__tabs">
                    <div class="welcome__tab welcome__tab_first welcome__tab_active">
                        <div class="welcome__inner">
                            <div class="welcome__wrapper">
                                <img class="welcome__img welcome__img_first welcome__img_in"
                                     src="<?= $img_first_slide; ?>" alt="welcome" title=""/>
                            </div>
                            <div class="welcome__content">
                                <div class="welcome__title welcome__title_first welcome__title_in">
                                    <div class="titleBig">
                                        <h1 class="titleBig__text titleBig__color titleBig__color_red"><?= $title_first_slide; ?></h1>
                                    </div>
                                </div>
                                <div class="welcome__subtitle welcome__subtitle_first welcome__subtitle_in"><?= $subtitle_first_slide; ?></div>
                                <div class="welcome__description welcome__description_first welcome__description_in"><?= $desc_first_slide?></div>
                            </div>
                        </div>
                        <div class="welcome__envelope welcome__envelope_first welcome__envelope_in">
                            <a class="button button__color_red" href="<?= esc_url($link_first_slide); ?>">
                                <span class="button__text">more</span>
                            </a>
                        </div>
                    </div>
                    <div class="welcome__tab welcome__tab_second">
                        <div class="welcome__inner">
                            <div class="welcome__wrapper">
                                <img class="welcome__img welcome__img_second"
                                     src="<?= $img_second_slide; ?>" alt="welcome" title=""/>
                            </div>
                            <div class="welcome__content">
                                <div class="welcome__title welcome__title_second">
                                    <div class="titleBig">
                                        <h1 class="titleBig__text titleBig__color titleBig__color_grey"><?=$title_second_slide?></h1>
                                    </div>
                                </div>
                                <div class="welcome__subtitle welcome__subtitle_second"><?= $subtitle_second_slide?></div>
                                <div class="welcome__description welcome__description_second"><?=$desc_second_slide?></div>
                            </div>
                        </div>
                        <div class="welcome__envelope welcome__envelope_second">
                            <a class="button button__color_grey" href="<?= esc_url($link_second_slide); ?>">
                                <span class="button__text">more</span>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="welcome__items">
                    <li class="welcome__item welcome__item_first welcome__item_active">1
                    </li>
                    <li class="welcome__item welcome__item_second">2
                    </li>
                    <li class="welcome__line">
                    </li>
                </ul>
                <div class="welcome__navigation">
                    <a class="welcome__nav" href="<?= esc_url($link_first_link); ?>"><?= $text_first_link; ?></a>
                    <a class="welcome__nav" href="<?= esc_url($link_second_link); ?>"><?= $text_second_link; ?></a>
                </div>
            </div>
        </div>
    </main>
<?php
	get_template_part( '/core/views/footerView' );
	get_footer();
?>