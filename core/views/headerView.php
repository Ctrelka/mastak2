<?php
    if (!defined( 'ABSPATH' )) exit();
    $logo            = carbon_get_theme_option( 'crb_logo_img' ) ;
    $contact_us_link = carbon_get_theme_option( 'crb_contact_us_link' ) ;
    $fb              = carbon_get_theme_option( 'crb_fb' ) ;
    $insta           = carbon_get_theme_option( 'crb_insta' ) ;
?>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="header__logo" href="/">
                <img class="header__logo-img" src="<?= $logo; ?>" alt="Mastak" title=""/>
            </a>
            <div class="header__link">
                <a class="header__link-text" href="<?= get_permalink($contact_us_link); ?>">contact us</a>
                <a class="header__burger" href="#">
                    <span class="header__burger-line"></span>
                    <span class="header__burger-line"></span>
                </a>
            </div>
        </div>
    </div>
    <nav class="header__menu">
        <div class="container">
            <div class="header__menu-title">MENU

<!--                <ul class="header__menu-list">-->
<!--                    <li class="header__menu-list-item">-->
<!--                        <a href="#">-->
<!--                            web-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="header__menu-list-item">-->
<!--                        <a href="#">-->
<!--                            design-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="header__menu-list-item header__menu-list-item_active menu-list-item menu-list-item_active-link-load">-->
<!--                        <a href="#">-->
<!--                            portfolio-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="header__menu-list-item">-->
<!--                        <a href="#">-->
<!--                            team-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="header__menu-list-item">-->
<!--                        <a href="#">-->
<!--                            contact-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->

                <?php get_template_part( "/core/views/mainMenu" ); ?>
                <div class="header__menu-soc">
                    <a class="header__menu-soc-item-link" href="<?= esc_url($fb); ?>">
                        <img class="header__menu-soc-item-link-img"
                             src="/wp-content/themes/mastak2/src/icons/fb.b49aa1.png" alt="Facebook" title=""/>
                    </a>
                    <a class="header__menu-soc-item-link" href="<?= esc_url($insta); ?>">
                        <img class="header__menu-soc-item-link-img"
                             src="/wp-content/themes/mastak2/src/icons/inst.0453d7.png" alt="Facebook" title=""/>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>