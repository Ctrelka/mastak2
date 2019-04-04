<?php
    /**
     * Template Name: Home Template
     */
    get_header();

    get_template_part('/core/views/headerView'); ?>
    <main class="main pb-40">main</main>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <span class="footer__text">This website uses cookies to improve your experience.</span>
                <a class="footer__link" href="#">Allow cookies. Cookie Policy</a>
            </div>
        </div>
    </footer>

<?php get_footer(); ?>