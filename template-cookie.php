<?php
    /**
     * Template Name: Cookie Template
     */
    get_header();

    get_template_part('/core/views/headerView'); ?>
    <div class="cookie">
        <div class="container">
            <div class="cookie__inner">
                <div class="titleMedium">
                    <h1 class="titleMedium__text text"><?= get_the_title(); ?>
                    </h1>
                </div>
                <div class="cookie__text">
                    <div class="editor-content">
                        <?
                            global $post;
                            if (have_posts()):while (have_posts()):
                                the_post();
                                the_content();
                            endwhile; endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    get_template_part('/core/views/footerView');
    get_footer();
?>