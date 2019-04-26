<?php
	get_header( "noColor" );

	get_template_part( "/core/views/headerView","portfolio" ); ?>

    <main class="main">
        <div class="portfolio">
            <div class="portfolio__inner">
                <div class="portfolio__slide-menu">
                    <div class="portfolio__title">
                        <div class="titleLittle">
                            <h1 class="titleLittle__text text">portfolio
                            </h1>
                        </div>
                    </div>
                    <ul class="portfolio__slide-menu-list controls">
                        <li class="portfolio__slide-menu-list-item portfolio__slide-menu-list-item portfolio__slide-menu-list-item_active portfolio__slide-menu-list-item portfolio__slide-menu-list-item_active-menu_active control"
                            data-filter="all">
                            <a>All projects</a>
                            <span class="portfolio__slide-menu-desc">All projects</span>
                        </li>
                        <li class="portfolio__slide-menu-list-item control" data-filter=".web">
                            <a>web services</a>
                            <span class="portfolio__slide-menu-desc">web services</span>
                        </li>
                        <li class="portfolio__slide-menu-list-item control" data-filter=".design">
                            <a>design</a>
                            <span class="portfolio__slide-menu-desc">design</span>
                        </li>
                    </ul>
                </div>
                <div class="portfolio__portfolio-container swiper-container">
                    <div class="swiper-wrapper portfolio-wrapper">
                        <div class="portfolio__portfolio-item swiper-slide mix web"
                             style="background-image:url(/wp-content/themes/mastak2/src/icons/sl1.675772.png)"
                             data-id="1">
                            <div class="portfolio__portfolio-item-container">
                                <div class="portfolio__image-content">
                                    <div class="portfolio__button">
                                        <a class="portfolio__button-tag portfolio__button-tag portfolio__button-tag_color-red"
                                           href="#">
                                            <span class="portfolio__button-tag-text">web</span>
                                        </a>
                                    </div>
                                    <span class="portfolio__image-content-title portfolio__color portfolio__color_white">Site for the service Rebox for the delivery of products</span>
                                    <div class="portfolio__image-content-item">
                                        <img class="portfolio__image-content-item-text"
                                             src="/wp-content/themes/mastak2/src/icons/b-logo.5104c4.png" alt="Rebox"
                                             title=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__portfolio-item swiper-slide mix design"
                             style="background-image:url(/wp-content/themes/mastak2/src/icons/sl2.f4c041.png)"
                             data-id="2">
                            <div class="portfolio__portfolio-item-container">
                                <div class="portfolio__image-content">
                                    <div class="portfolio__button">
                                        <a class="portfolio__button-tag portfolio__button-tag portfolio__button-tag_color-grey"
                                           href="#">
                                            <span class="portfolio__button-tag-text">design & branding</span>
                                        </a>
                                    </div>
                                    <span class="portfolio__image-content-title portfolio__color portfolio__color_white">Site for the service Rebox for the delivery of products</span>
                                    <div class="portfolio__image-content-item">
                                        <img class="portfolio__image-content-item-text"
                                             src="/wp-content/themes/mastak2/src/icons/b-logo.5104c4.png" alt="Rebox"
                                             title=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__portfolio-item swiper-slide mix web"
                             style="background-image:url(/wp-content/themes/mastak2/src/icons/sl3.510d66.png)"
                             data-id="3">
                            <div class="portfolio__portfolio-item-container">
                                <div class="portfolio__image-content">
                                    <div class="portfolio__button">
                                        <a class="portfolio__button-tag portfolio__button-tag portfolio__button-tag_color-red"
                                           href="#">
                                            <span class="portfolio__button-tag-text">web</span>
                                        </a>
                                    </div>
                                    <span class="portfolio__image-content-title">Site for the service Rebox for the delivery of products</span>
                                    <div class="portfolio__image-content-item">
                                        <img class="portfolio__image-content-item-text"
                                             src="/wp-content/themes/mastak2/src/icons/b-logo.5104c4.png" alt="Rebox"
                                             title=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__portfolio-item swiper-slide mix design"
                             style="background-image:url(/wp-content/themes/mastak2/src/icons/sl4.637c9e.png)"
                             data-id="4">
                            <div class="portfolio__portfolio-item-container">
                                <div class="portfolio__image-content">
                                    <div class="portfolio__button">
                                        <a class="portfolio__button-tag portfolio__button-tag portfolio__button-tag_color-grey"
                                           href="#">
                                            <span class="portfolio__button-tag-text">design & branding</span>
                                        </a>
                                    </div>
                                    <span class="portfolio__image-content-title portfolio__color portfolio__color_white">Site for the service Rebox for the delivery of products</span>
                                    <div class="portfolio__image-content-item">
                                        <img class="portfolio__image-content-item-text"
                                             src="/wp-content/themes/mastak2/src/icons/b-logo.5104c4.png" alt="Rebox"
                                             title=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__portfolio-item swiper-slide mix web"
                             style="background-image:url(/wp-content/themes/mastak2/src/icons/sl5.3de6a9.png)"
                             data-id="5">
                            <div class="portfolio__portfolio-item-container">
                                <div class="portfolio__image-content">
                                    <div class="portfolio__button">
                                        <a class="portfolio__button-tag portfolio__button-tag portfolio__button-tag_color-red"
                                           href="#">
                                            <span class="portfolio__button-tag-text">web</span>
                                        </a>
                                    </div>
                                    <span class="portfolio__image-content-title portfolio__color portfolio__color_white">Site for the service Rebox for the delivery of products</span>
                                    <div class="portfolio__image-content-item">
                                        <img class="portfolio__image-content-item-text"
                                             src="/wp-content/themes/mastak2/src/icons/b-logo.5104c4.png" alt="Rebox"
                                             title=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__portfolio-item swiper-slide">
                            <div class="portfolio__portfolio-item-container">
                                <div class="portfolio__navigation-container">
                                    <div class="portfolio__navigation">
                                        <a class="portfolio__nav" href="#">SERVICES</a>
                                        <a class="portfolio__nav" href="#">team</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testDiva"></div>
    </main>
<?php
	//	get_template_part( '/core/views/footerView' );
	get_footer();
?><?php
