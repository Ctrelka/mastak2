<?php
	$terms     = get_the_terms( get_the_ID(), "portfolio_type" );

/**@var WP_Term $current_term */
	$current_term = $terms[0];
	//portfolio__button-tag_color-grey
	//portfolio__button-tag_color-red
	$label_color = carbon_get_term_meta($current_term->term_id, "label_color");
	$label_name = carbon_get_term_meta($current_term->term_id, "label_name");

	$background  = carbon_get_post_meta( get_the_ID(), "background" );
	$client_logo = carbon_get_post_meta( get_the_ID(), "client_logo" );
	$title_color = carbon_get_post_meta( get_the_ID(), "title_color_arch_page" );
?>
<div class="portfolio__portfolio-item swiper-slide tap mix <?= $current_term->slug ?>"
	<?php if (! empty( $background ) ): ?>
        style="background-image:url(<?= $background; ?>)"
	<?php endif; ?>
     data-id="<?= get_the_ID(); ?>">
    <div class="portfolio__portfolio-item-container">
        <div class="portfolio__image-content">
            <div class="portfolio__button">
				<?php if ( !empty( $terms ) ): ?>
                    <a class="portfolio__button-tag portfolio__button-tag <?= $label_color; ?>" href="#">
                        <span class="portfolio__button-tag-text"><?= $label_name; ?></span>
                    </a>
				<?php endif; ?>
            </div>
            <span class="portfolio__image-content-title <?= $title_color;?>"><?= get_the_title(); ?></span>
            <div class="portfolio__image-content-item">
				<?php if (! empty( $client_logo ) ): ?>
                    <img class="portfolio__image-content-item-text"
                         src="<?= $client_logo; ?>"
                         alt="<?= get_the_title(); ?>" />
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>