<?php
    /**
     * Template Name: Contacts Template
     */
    get_header();

    $persons = carbon_get_post_meta(get_the_ID(), 'contact_persons');
    $m_1 = $persons[0];
	$m_2 = $persons[1];
    $information = carbon_get_post_meta(get_the_ID(), 'contact_information');
    $info_1 = $information[0];
	$info_2 = $information[1];

    get_template_part('/core/views/headerView');
    ?>
    <main class="main">
        <div class="contactPage">
            <div class="container">
                <div class="contactPage__inner">
                    <div class="titleBig">
                        <h1 class="titleBig__text">contact</h1>
                    </div>
                    <div class="contactPage__inner-container">
                        <div class="container">
                            <div class="contactPage__person row">
                                <div class="contactPage__person-item-first col-12 col-md-6">
                                    <div class="contactPage__person-item-first-image">
                                        <img class="contactPage__person-item-first-image-foto"
                                             src="<?= $m_1["photo"];?>" alt="Person" title=""/>
                                    </div>
                                    <div class="contactPage__person-item-first-about">
                                        <p class="contactPage__person-item-first-about-name"><?= $m_1["person_name"]; ?></p>
                                        <span class="contactPage__person-item-first-about-text"><?= $m_1["person_position"]; ?></span>
                                        <span class="contactPage__person-item-first-about-text"><?= $m_1["person_email"]; ?></span>
                                    </div>
                                </div>
                                <div class="contactPage__person-item-second col-12 col-md-6">
                                    <div class="contactPage__person-item-second-image">
                                        <img class="contactPage__person-item-second-image-foto"
                                             src="<?= $m_2["photo"];?>" alt="Person" title=""/>
                                    </div>
                                    <div class="contactPage__person-item-second-about">
                                        <p class="contactPage__person-item-second-about-name"><?= $m_2["person_name"]; ?></p>
                                        <span class="contactPage__person-item-second-about-text"><?= $m_2["person_position"]; ?></span>
                                        <span class="contactPage__person-item-second-about-text"><?= $m_2["person_email"]; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="contactPage__info row">
                                <div class="contactPage__info-adrress col-12 col-sm-6">
                                    <div class="contactPage__info-adrress-tabs">
                                        <span class="contactPage__info-adrress-tabs-item"><?= $info_1["country"]; ?></span>
                                        <span class="contactPage__info-adrress-tabs-item"><?= $info_2["country"]; ?></span>
                                    </div>
                                    <div class="contactPage__info-adrress-contents">
                                        <div class="contactPage__info-adrress-content">
                                            <a class="contactPage__info-adrress-content-link" href="tel:<?= $info_1["phone"]; ?>">
	                                            <?= $info_1["phone"]; ?>
                                            </a>
                                            <div class="contactPage__info-adrress-content-text">
	                                            <?= $info_1["address"]; ?>
                                            </div>
                                            <a class="button button__color_red" href="<?= esc_url($info_1["map_link"]); ?>">
                                                <span class="button__text">view on map</span>
                                            </a>
                                        </div>
                                        <div class="contactPage__info-adrress-content">
                                            <a class="contactPage__info-adrress-content-link" href="tel:<?= $info_2["phone"]; ?>">
	                                            <?= $info_2["phone"]; ?>
                                            </a>
                                            <div class="contactPage__info-adrress-content-text">
	                                            <?= $info_2["address"]; ?>
                                            </div>
                                            <a class="button button__color_red" href="#">
                                                <span class="button__text">view on map</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="contactPage__info-message col-12 col-sm-6">
                                    <form id="info-message" method="POST" action="/">
                                        <div class="contactPage__info-message-input row">
                                            <div class="contactPage__info-message-input-inner col-6">
                                                <input class="input" type="text" name="username" placeholder="Name">
                                                <div class="contactPage__info-message-input-inner-response-name">
                                                </div>
                                            </div>
                                            <div class="contactPage__info-message-input-inner col-6">
                                                <input class="input" type="text" name="useremail" placeholder="E-mail">
                                                <div class="contactPage__info-message-input-inner-response-email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contactPage__info-message-textarea">
                                            <div class="contactPage__textarea">
                                            <textarea class="textarea" name="usermessage"
                                                      placeholder="Message"></textarea>
                                                <div class="contactPage__info-message-input-inner-response">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contactPage__button">
                                            <button class="button button__submit button__submit_color_grey" type="submit"
                                                    name="userbutton">
                                                <span class="button__text">sent message</span>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="preloader">
                                        <div class="preloader__text-red">Thank you
                                        </div>
                                        <div class="preloader__spinner preloader__message"></div>
                                        <div class="preloader__text-grey">one more message
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    get_template_part('/core/views/footerView');
    get_footer();
?>