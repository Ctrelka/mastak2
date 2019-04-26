<?php
	get_header();

	get_template_part( '/core/views/headerView' ); ?>
    <div class="cookie">
        <div class="container">
            <div class="cookie__inner">
                <div class="titleMedium">
                    <h1 class="titleMedium__text text">portfolio</h1>
                </div>
                <div class="cookie__text">
                    <div class="editor-content">
                        <ul>
							<?
								global $post;
								if ( have_posts() ):while ( have_posts() ):
									the_post();
									//                            var_dump($post->post_name);
									?>
                                    <li>
                                        <a href="#" data-id="<?= get_the_ID(); ?>" class="test_get_single"> <?= get_the_title(); ?> </a>
                                    </li>
								<?php endwhile; endif;
							?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="test_ajax" id="test_ajax"></div>
<?php
	get_template_part( '/core/views/footerView' );
	get_footer();
?><?php
