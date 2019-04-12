<?php
    get_header();

	get_template_part('/core/views/headerView');
?>
<main class="main main__h_100vh">
    <div class="page404">
        <div class="container">
            <div class="page404__inner">
                <div class="page404__404">404</div>
                <div class="page404__wrapper">
                    <div class="page404__text">Page not found</div>
                    <div class="page404__desription">We’re sorry, the page you have looked for does not exist in our database! Maybe go to our home page</div>
                </div>
            </div><img class="page404__image" src="/wp-content/themes/mastak2/src/icons/maks.1581d2.png" alt="maks"><img class="page404__image-eyes" src="/wp-content/themes/mastak2/src/icons/maks2.e004f3.png" alt="maks">
        </div>
    </div>
</main>
<div class="footer">
    <div class="container">
        <div class="footer__inner"><span class="footer__text">This website uses cookies to improve your experience.</span><a class="footer__link" href="#">Allow cookies. Cookie Policy</a>
        </div>
    </div>
</div>

<?php get_footer();?>