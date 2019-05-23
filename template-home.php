<?php
	/**
	 * Template Name: Home Template
	 */
	get_header( "noColor" );

	$title_first_slide    = carbon_get_post_meta( get_the_ID(), 'crb_title_first_slide' );
	$subtitle_first_slide = carbon_get_post_meta( get_the_ID(), 'crb_subtitle_first_slide' );
	$desc_first_slide     = carbon_get_post_meta( get_the_ID(), 'crb_description_first_slide' );
	$link_first_slide     = carbon_get_post_meta( get_the_ID(), 'crb_link_first_slide' );
	$img_first_slide      = carbon_get_post_meta( get_the_ID(), 'crb_img_first_slide' );

	$title_second_slide    = carbon_get_post_meta( get_the_ID(), 'crb_title_second_slide' );
	$subtitle_second_slide = carbon_get_post_meta( get_the_ID(), 'crb_subtitle_second_slide' );
	$desc_second_slide     = carbon_get_post_meta( get_the_ID(), 'crb_description_second_slide' );
	$link_second_slide     = carbon_get_post_meta( get_the_ID(), 'crb_link_second_slide' );
	$img_second_slide      = carbon_get_post_meta( get_the_ID(), 'crb_img_second_slide' );

	$text_first_link  = carbon_get_post_meta( get_the_ID(), 'crb_text_first_link' );
	$link_first_link  = carbon_get_post_meta( get_the_ID(), 'crb_link_first_link' );
	$text_second_link = carbon_get_post_meta( get_the_ID(), 'crb_text_second_link' );
	$link_second_link = carbon_get_post_meta( get_the_ID(), 'crb_link_second_link' );

	get_template_part( '/core/views/headerView' ); ?>
    <main class="main">
        <div class="welcome">
            <div class="container">
                <div class="welcome__inner-class">
                    <div class="welcome__inner-content">
                        <div class="welcome__tabs">
                            <div class="welcome__tab welcome__tab_first welcome__tab_active">
                                <div class="welcome__inner">
                                    <div class="welcome__wrapper">
                                        <img class="welcome__img welcome__img_first welcome__img_in"
                                             src="<?= $img_second_slide; ?>" alt="welcome" title=""/>
                                    </div>
                                    <div class="welcome__content">
                                        <div class="welcome__title welcome__title_first welcome__title_in">
                                            <div class="titleBig">
                                                <h1 class="titleBig__text titleBig__color titleBig__color_red"><?=$title_first_slide?></h1>
                                            </div>
                                        </div>
                                        <div class="welcome__subtitle welcome__subtitle_first welcome__subtitle_in"><?= $subtitle_first_slide?></div>
                                        <div class="welcome__description welcome__description_first welcome__description_in"><?= $desc_first_slide?></div>
                                    </div>
                                </div>
                                <div class="welcome__envelope welcome__envelope_first welcome__envelope_in">
                                    <a class="button button__color_red" href="#">
                                        <span class="button__text">more</span>
                                    </a>
                                </div>
                            </div>
                            <div class="welcome__tab welcome__tab_second">
                                <div class="welcome__inner">
                                    <div class="welcome__wrapper">
                                        <img class="welcome__img welcome__img_second" src="<?= $img_second_slide; ?>" alt="welcome" title=""/>
                                    </div>
                                    <div class="welcome__content">
                                        <div class="welcome__title welcome__title_second">
                                            <div class="titleBig">
                                                <h1 class="titleBig__text titleBig__color titleBig__color_grey"><?=$title_second_slide?></h1>
                                            </div>
                                        </div>
                                        <div class="welcome__subtitle welcome__subtitle_second"><?= $subtitle_second_slide?></div>
                                        <div class="welcome__description welcome__description_second"><?=$desc_second_slide?></div>
                                    </div>
                                </div>
                                <div class="welcome__envelope welcome__envelope_second">
                                    <a class="button button__color_grey" href="#">
                                        <span class="button__text">more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="welcome__items">
                            <li class="welcome__item welcome__item_first welcome__item_active">1
                            </li>
                            <li class="welcome__item welcome__item_second">2
                            </li>
                            <li class="welcome__line">
                            </li>
                        </ul>
                        <div class="welcome__navigation">
                            <a class="welcome__nav" href="<?= esc_url($link_first_link); ?>"><?= $text_first_link; ?></a>
                            <a class="welcome__nav" href="<?= esc_url($link_second_link); ?>"><?= $text_second_link; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-dev">
                <div class="process">
                    <div class="container">
                        <div class="process__inner">
                            <div class="titleMedium">
                                <h1 class="titleMedium__text text">Development process
                                </h1>
                            </div>
                            <div class="process__content">
                                <div class="process__description">from idea to launch
                                </div>
                                <canvas id="cas">
                                </canvas>
                                <div class="process__items">
                                    <div class="process__item">
                                        <div class="process__image-wrapper">
                                            <img class="process__image"
                                                 src="/wp-content/themes/mastak2/src/icons/lamp.0c888c.svg" alt="lamp"
                                                 title=""/>
                                        </div>
                                        <div class="process__item-title" data-numeral="1">Analytics
                                        </div>
                                        <ol class="process__list">
                                            <li class="process__paragraph">We discuss the specifics of your business and
                                                it`s strengths
                                            </li>
                                            <li class="process__paragraph">Professionally explore the market and the
                                                target audience
                                            </li>
                                            <li class="process__paragraph">Generate ideas for your online resource
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="process__item">
                                        <div class="process__image-wrapper">
                                            <img class="process__image"
                                                 src="/wp-content/themes/mastak2/src/icons/pen.77349f.svg" alt="pen"
                                                 title=""/>
                                        </div>
                                        <div class="process__item-title" data-numeral="2">prototype
                                        </div>
                                        <ol class="process__list">
                                            <li class="process__paragraph">We discuss and agree on the terms of
                                                reference
                                            </li>
                                            <li class="process__paragraph">We develop and approve the structure of your
                                                site
                                            </li>
                                            <li class="process__paragraph">Correct the elements of the prototype
                                                (project site)
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="process__item">
                                        <div class="process__image-wrapper">
                                            <img class="process__image"
                                                 src="/wp-content/themes/mastak2/src/icons/pk.1bfa74.svg" alt="pk"
                                                 title=""/>
                                        </div>
                                        <div class="process__item-title" data-numeral="3">Design
                                        </div>
                                        <ol class="process__list">
                                            <li class="process__paragraph">We draw mock-ups of all pages of the site
                                                taking into account the design trends
                                            </li>
                                            <li class="process__paragraph">We agree with you the concept for the mobile
                                                and desktop versions of the site
                                            </li>
                                            <li class="process__paragraph">We make corrections and modifications in
                                                accordance to requested changes
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="process__item">
                                        <div class="process__image-wrapper">
                                            <img class="process__image"
                                                 src="/wp-content/themes/mastak2/src/icons/arr.14ff7f.svg" alt="arr"
                                                 title=""/>
                                        </div>
                                        <div class="process__item-title" data-numeral="4">Nesting
                                        </div>
                                        <ol class="process__list">
                                            <li class="process__paragraph">Create the correct semantic HTML code
                                            </li>
                                            <li class="process__paragraph">We integrate the code with an easy-to-use
                                                CMS-platform
                                            </li>
                                            <li class="process__paragraph">Configure the site, install the necessary
                                                modules and components
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="process__item">
                                        <div class="process__image-wrapper">
                                            <img class="process__image"
                                                 src="/wp-content/themes/mastak2/src/icons/test.d91ad9.svg" alt="test"
                                                 title=""/>
                                        </div>
                                        <div class="process__item-title" data-numeral="5">Testing
                                        </div>
                                        <ol class="process__list">
                                            <li class="process__paragraph">We test the working capacity of the entire
                                                site
                                            </li>
                                            <li class="process__paragraph">We check the visual of the display on all
                                                devices and browsers
                                            </li>
                                            <li class="process__paragraph">Launch your stylish, convenient and
                                                functional website
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="process__item">
                                        <div class="process__image-wrapper">
                                            <img class="process__image"
                                                 src="/wp-content/themes/mastak2/src/icons/sup.16145c.svg" alt="sup"
                                                 title=""/>
                                        </div>
                                        <div class="process__item-title" data-numeral="6">Support
                                        </div>
                                        <ol class="process__list">
                                            <li class="process__paragraph">We check the visuals of the site
                                            </li>
                                            <li class="process__paragraph">Install the necessary technical updates
                                            </li>
                                            <li class="process__paragraph">We advise and provide technical support
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="types">
                    <div class="container">
                        <div class="types__inner">
                            <div class="titleMedium">
                                <h1 class="titleMedium__text text">tYpeS Of Sites
                                </h1>
                            </div>
                            <div class="types__content">
                                <div class="types__description">that we develop
                                </div>
                                <div class="types__items">
                                    <div class="types__item">
                                        <div class="types__item-title">LANDING Page
                                        </div>
                                        <div class="types__item-description">A selling single-page website
                                        </div>
                                        <ul class="types__list">
                                            <li class="types__paragraph">Gives the opportunity to speak about your
                                                company or a separate service, without overpaying for a multi-page site;
                                            </li>
                                            <li class="types__paragraph">Designed for rapid collection of leads and
                                                promotion campaigns;
                                            </li>
                                            <li class="types__paragraph">Has a bright design and a clear call to action;
                                            </li>
                                            <li class="types__paragraph">Is inexpensive and is created in the shortest
                                                possible time.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="types__item">
                                        <div class="types__item-title">Corporate website
                                        </div>
                                        <div class="types__item-description">Image site
                                        </div>
                                        <ul class="types__list">
                                            <li class="types__paragraph">Contains complete information about your
                                                company and services;
                                            </li>
                                            <li class="types__paragraph">Is aimed at obtaining a stable flow of calls
                                                and applications;
                                            </li>
                                            <li class="types__paragraph">Increases the loyalty of the company`s
                                                customers;
                                            </li>
                                            <li class="types__paragraph">Helps to attract new business connections and
                                                new customers.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="types__item">
                                        <div class="types__item-title">e-commerce site
                                        </div>
                                        <div class="types__item-description">Virtual store of your goods
                                        </div>
                                        <ul class="types__list">
                                            <li class="types__paragraph">Has an understandable and convenient directory
                                                structure;
                                            </li>
                                            <li class="types__paragraph">Ensures stable operation under severe loads;
                                            </li>
                                            <li class="types__paragraph">Integrates with your systems and services;
                                            </li>
                                            <li class="types__paragraph">Has a unique selling design.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="types__item">
                                        <div class="types__item-title">Internet portal
                                        </div>
                                        <div class="types__item-description">Multifunctional site with a catalog of
                                            goods, services or facilities
                                        </div>
                                        <ul class="types__list">
                                            <li class="types__paragraph">Established for specific commercial and
                                                information purposes;
                                            </li>
                                            <li class="types__paragraph">Allows you to get the necessary information on
                                                a topic of interest;
                                            </li>
                                            <li class="types__paragraph">Has a carefully designed navigation system, and
                                                a number of interactive services;
                                            </li>
                                            <li class="types__paragraph">Forms user communities.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="technologiesHome">
                    <div class="container">
                        <ul class="technologiesHome__list" data-color-start="rgb(216,37,26)"
                            data-color-end="rgb(0, 49, 158)"
                            data-wrapper-color="linear-gradient(to right, #D8251A, #004F9E)">
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">HTML5</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">CSS3</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">SASS</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">JavaScript (ES6)</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">Project</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">Webpack4</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">jQuery3</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">PHP7</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                            <li class="technologiesHome__item">
                                <span class="technologiesHome__name">Git</span>
                                <span class="technologiesHome__addition "></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="swiperWe">
                    <div class="container">
                        <div class="swiperWe__content">
                            <canvas id="myCanvas">
                            </canvas>
                            <div class="swiperWe__inner">
                                <div class="swiperWe__title">we
                                </div>
                                <div class="swiperWe__container swiper-container">
                                    <div class="swiperWe__wrapper swiper-wrapper">
                                        <div class="swiperWe__slide swiper-slide">consider the implementation in detail
                                        </div>
                                        <div class="swiperWe__slide swiper-slide">consider the implementation in detail
                                        </div>
                                        <div class="swiperWe__slide swiper-slide">consider the implementation in detail
                                        </div>
                                        <div class="swiperWe__slide swiper-slide">consider the implementation in detail
                                        </div>
                                    </div>
                                    <div class="swiperWe__pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-line">
                    <div class="container">
                        <div class="footer-line__inner">
                            <div class="footer-line__inner_stroke"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
	get_template_part( '/core/views/footerView' );
	get_footer();
?>