<?php
	/**
	 * Template Name: Team All Template
	 */
	get_header( "greyLight" );
	$text = carbon_get_post_meta(get_the_ID(), "crb_text");
	$button_link = carbon_get_post_meta(get_the_ID(), "crb_button_link");

	get_template_part( '/core/views/headerView' ); ?>
    <main class="main">
        <div class="teamAll">
            <div class="container">
                <div class="teamAll__inner">
                    <div class="titleMedium">
                        <h1 class="titleMedium__text text">Our approach
                        </h1>
                    </div>
                    <div class="teamAll__core-inner">
                        <div class="teamAll__core-inner-item"><img class="teamAll__core-inner-item-image" src="/wp-content/themes/mastak2/src/icons/core.ddc989.png" alt="Core" title=""/>
                        </div>
                        <div class="teamAll__core-inner-content">
                            <div class="teamAll__core-inner-content-title">Professional approach
                            </div>
                            <div class="teamAll__core-inner-content-text">Attentive attitude to customers, partners and colleagues. The team keeps to a professional approach in every aspect - from the manner of communicating with the client to meeting deadlines. We have great experience and modern tools to solve any complex problems of customers.
                            </div>
                        </div>
                        <div class="teamAll__core-inner-content">
                            <div class="teamAll__core-inner-content-title">Mutual responsibility
                            </div>
                            <div class="teamAll__core-inner-content-text">And attention to details. Mutual respect and responsibility in relations with partners, compliance with requirements and wishes is the foundation of our work. In order to take into account all the mutual interests, it is necessary to consider every detail.
                            </div>
                        </div>
                        <div class="teamAll__core-inner-content">
                            <div class="teamAll__core-inner-content-title">Creativity
                            </div>
                            <div class="teamAll__core-inner-content-text">The ability to find new ways and have abroad vision of the world is the basis of our work. For this reason, the team is supported by a new look and outstanding ideas. We accurately find the best solutions on any of the given tasks.
                            </div>
                        </div>
                    </div>
                    <div class="teamAll__sharing-inner">
                        <div class="teamAll__sharing-inner-item"><img class="teamAll__sharing-inner-item-image" src="/wp-content/themes/mastak2/src/icons/sharing.91973f.png" alt="Core" title=""/>
                        </div>
                        <div class="teamAll__sharing-inner-content">
                            <div class="teamAll__sharing-inner-content-title">Economy
                            </div>
                            <div class="teamAll__sharing-inner-content-text">Nowadays, more and more people are opting for online services that are based on innovative sharing economy and collaborative consumption business models.
                            </div>
                        </div>
                        <div class="teamAll__sharing-inner-content">
                            <div class="teamAll__sharing-inner-content-item">
                                <div class="teamAll__sharing-inner-content-title">&
                                </div>
                                <div class="teamAll__sharing-inner-content-title">Services
                                </div>
                            </div>
                            <div class="teamAll__sharing-inner-content-text">And attention to details. Mutual respect and responsibility in relations with partners, compliance with requirements and wishes is the foundation of our work. In order to take into account all the mutual interests, it is necessary to consider every detail.
                            </div>
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