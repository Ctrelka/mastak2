<?php
    $cookie_policy = carbon_get_theme_option('wsb_cookie_policy');
?>
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <span class="footer__text">This website uses cookies to improve your experience.</span>
            <a class="footer__link" href="<?= get_permalink($cookie_policy);?>">Allow cookies. Cookie Policy</a>
        </div>
    </div>
</footer>
