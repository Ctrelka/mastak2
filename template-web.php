<?php
	/**
	 * Template Name: Web Template
	 */
	get_header( "noColor" );

	$subtitle    = carbon_get_post_meta( get_the_ID(), 'crb_subtitle' );
	$desc        = carbon_get_post_meta( get_the_ID(), 'crb_desc' );
	$what_we_do  = carbon_get_post_meta( get_the_ID(), 'contact_what_we_do' );
	$short_bold  = carbon_get_post_meta( get_the_ID(), 'crb_short_bold' );
	$big_regular = carbon_get_post_meta( get_the_ID(), 'crb_big_regular' );
	$crb_order   = carbon_get_post_meta( get_the_ID(), 'crb_order' );

	get_template_part( '/core/views/headerView' ); ?>
    <main class="main">
        <div class="homeWeb">
            <div class="container">
                <div class="homeWeb__inner">
                    <div class="titleMedium">
                        <h1 class="titleMedium__text text"><?= get_the_title(); ?></h1>
                    </div>
                    <p class="homeWeb__inner-title"><?= $subtitle ?></p>
                    <p class="homeWeb__inner-text"><?= $desc; ?></p>
                    <span class="homeWeb__inner-preview">What we do:</span>
                    <div class="homeWeb__inner-items">
						<?php
							$counter        = 1;
							foreach ( $what_we_do as $item ):
								$item_icon = $item['icon'];
								$item_desc  = $item['desc'];
								$item_title = $item['title'];
								?>
                                <div class="homeWeb__inner-items-content">
                                    <div class="homeWeb__inner-items-content-image">
                                        <span class="homeWeb__inner-items-content-image-number"><?= $counter; ?></span>
                                        <div class="homeWeb__inner-items-content-image-container">
                                            <img class="homeWeb__inner-items-content-image-item"
                                                 src="<?= $item_icon; ?>" alt="Item" title=""/>
                                        </div>
                                    </div>
                                    <p class="homeWeb__inner-items-content-title"><?= $item_title; ?></p>
                                    <p class="homeWeb__inner-items-content-text"><?= $item_desc; ?></p>
                                </div>
								<?php
								$counter ++;
							endforeach;
						?>
                    </div>
                    <div class="homeWeb__inner-container">
                        <div class="homeWeb__inner-text-content">
                            <p class="homeWeb__inner-text-title"><?= $short_bold; ?></p>
                            <p class="homeWeb__inner-text-preview"><?= $big_regular; ?></p>
                        </div>
                        <div class="homeWeb__inner-text-slider">
                        </div>
                    </div>
                    <p class="homeWeb__inner-text-end"><?= $crb_order; ?></p>
                </div>
            </div>
        </div>
    </main>
<?php
	get_template_part( '/core/views/footerView', 'RedLine' );
	get_footer();
?>