<?php
	/**
	 * Template Name: Team Template
	 */
	get_header( "red" );
	$text = carbon_get_post_meta(get_the_ID(), "crb_text");
	$button_link = carbon_get_post_meta(get_the_ID(), "crb_button_link");
	$top_img = carbon_get_post_meta(get_the_ID(), "top_img");
	$middle_img = carbon_get_post_meta(get_the_ID(), "middle_img");
	$button_img = carbon_get_post_meta(get_the_ID(), "button_img");

	get_template_part( '/core/views/headerView' ); ?>
    <main class="main">
        <div class="team">
            <div class="team__inner">
                <div class="titleBig">
                    <h1 class="titleBig__text titleBig__color titleBig__color_white"><?= get_the_title(); ?></h1>
                </div>
                <div class="team__inner-container">
                    <div class="team__text-container">
                        <p class="team__text"><?= $text; ?></p>
                        <a class="button button__color_white" href="<?= esc_url($button_link);?>">
                            <span class="button__text">more</span>
                        </a>
                    </div>
                    <div class="team__image-container">
                        <div class="team__image-container-team-first">
                            <img class="team__image-container-team-first-image"
                                 src="<?= $button_img; ?>" alt="Team 1" title=""/>
                        </div>
                        <div class="team__image-container-team-second">
                            <img class="team__image-container-team-second-image"
                                 src="<?= $middle_img; ?>" alt="Team 2" title=""/>
                        </div>
                        <div class="team__image-container-team-third">
                            <img class="team__image-container-team-third-image"
                                 src="<?= $top_img; ?>" alt="Team 3" title=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
	get_template_part( '/core/views/footerView' );
	get_footer();
?>