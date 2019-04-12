<?php
	/**
	 * Template Name: Team All Template
	 */
	get_header( "greyLight" );
	$first_s_img          = carbon_get_post_meta( get_the_ID(), "first_s_img" );
	$first_s_title_left   = carbon_get_post_meta( get_the_ID(), "first_s_title_left" );
	$first_s_text_left    = carbon_get_post_meta( get_the_ID(), "first_s_text_left" );
	$first_s_title_center = carbon_get_post_meta( get_the_ID(), "first_s_title_center" );
	$first_s_text_center  = carbon_get_post_meta( get_the_ID(), "first_s_text_center" );
	$first_s_title_right  = carbon_get_post_meta( get_the_ID(), "first_s_title_right" );
	$first_s_text_right   = carbon_get_post_meta( get_the_ID(), "first_s_text_right" );
	$second_s_img         = carbon_get_post_meta( get_the_ID(), "second_s_img" );
	$second_s_title_left  = carbon_get_post_meta( get_the_ID(), "second_s_title_left" );
	$second_s_text_left   = carbon_get_post_meta( get_the_ID(), "second_s_text_left" );
	$second_s_title_right = carbon_get_post_meta( get_the_ID(), "second_s_title_right" );
	$second_s_text_right  = carbon_get_post_meta( get_the_ID(), "second_s_text_right" );
	$third_s_img          = carbon_get_post_meta( get_the_ID(), "third_s_img" );
	$third_s_text         = carbon_get_post_meta( get_the_ID(), "third_s_text" );

	get_template_part( '/core/views/headerView' ); ?>
    <main class="main">
        <div class="teamAll">
            <div class="container">
                <div class="teamAll__inner">
                    <div class="titleMedium">
                        <h1 class="titleMedium__text text"><?= get_the_title(); ?></h1>
                    </div>
                    <div class="teamAll__core-inner">
                        <div class="teamAll__core-inner-item">
                            <img class="teamAll__core-inner-item-image"
                                 src="<?= $first_s_img; ?>" alt="Core" title=""/>
                        </div>
                        <div class="teamAll__core-inner-items">
                            <div class="teamAll__core-inner-items-content-first">
                                <div class="teamAll__core-inner-content">
                                    <p class="teamAll__core-inner-content-title"><?= $first_s_title_left; ?></p>
                                    <p class="teamAll__core-inner-content-text"><?= $first_s_text_left;?></p>
                                </div>
                                <div class="teamAll__core-inner-content">
                                    <p class="teamAll__core-inner-content-title"><?= $first_s_title_center;?></p>
                                    <p class="teamAll__core-inner-content-text"><?= $first_s_text_center;?></p>
                                </div>
                            </div>
                            <div class="teamAll__core-inner-items-content-second">
                                <div class="teamAll__core-inner-content">
                                    <p class="teamAll__core-inner-content-title"><?= $first_s_title_right;?></p>
                                    <p class="teamAll__core-inner-content-text"><?= $first_s_text_right;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="teamAll__sharing-inner">
                        <div class="teamAll__sharing-inner-container">
                            <p class="teamAll__sharing-inner-text">Also we know and we are able:</p>
                            <div class="teamAll__sharing-inner-item">
                                <img class="teamAll__sharing-inner-item-image"
                                     src="<?= $second_s_img;?>" alt="Sharing" title=""/>
                            </div>
                        </div>
                        <div class="teamAll__sharing-inner-items-content">
                            <div class="teamAll__sharing-inner-content">
                                <p class="teamAll__sharing-inner-content-title"><?= $second_s_title_left;?></p>
                                <p class="teamAll__sharing-inner-content-text"><?= $second_s_text_left;?></p>
                            </div>
                            <div class="teamAll__sharing-inner-content">
                                <p class="teamAll__sharing-inner-content-title"><?=$second_s_title_right; ?></p>
                                <p class="teamAll__sharing-inner-content-text"><?= $second_s_text_right; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamAll__ecom-inner">
                        <div class="teamAll__ecom-inner-container">
                            <p class="teamAll__ecom-inner-text">Also we know and we are able:</p>
                            <div class="teamAll__ecom-inner-item">
                                <img class="teamAll__ecom-inner-item-image"
                                     src="<?= $third_s_img;?>" alt="Ecommerce" title=""/>
                            </div>
                        </div>
                        <div class="teamAll__ecom-inner-content">
                            <p class="teamAll__ecom-inner-content-text"><?= $third_s_text; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
	get_template_part( '/core/views/footerView', 'RedLine' );
	get_footer();
?>