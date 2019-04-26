<?php
    /**
     * Created by PhpStorm.
     * User: alexandrzanko
     * Date: 10/16/18
     * Time: 4:30 PM
     */

    if (!defined('ABSPATH')) {
        exit();
    }

    add_action('template_redirect', function () {

        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_script('commons', Assets::getJs('common'), false, null, true);
	        wp_localize_script( 'commons', 'mastakSendMail', array( 'url' => admin_url( 'admin-ajax.php' ) ) );

            if (is_page_template('template-home.php')) {
                wp_enqueue_script('home', Assets::getJs('home'), false, null, true);
            }if (is_page_template('template-cookie.php')) {
                wp_enqueue_script('cookie', Assets::getJs('cookie'), false, null, true);
            }if (is_page_template('template-contacts.php')) {
		        wp_enqueue_script('contact', Assets::getJs('contact'), false, null, true);
	        }if (is_page_template('template-team.php')) {
		        wp_enqueue_script('team', Assets::getJs('team'), false, null, true);
	        }if (is_page_template('template-teamAll.php')) {
		        wp_enqueue_script('teamAll', Assets::getJs('teamAll'), false, null, true);
	        }if (is_page_template('template-web.php')) {
		        wp_enqueue_script('homeWeb', Assets::getJs('homeWeb'), false, null, true);
	        } else if (is_404()) {
                wp_enqueue_script('p404', Assets::getJs('p404'), false, null, true);
            } else if (is_post_type_archive("portfolio")) {
		        wp_enqueue_script('cookie', Assets::getJs('cookie'), false, null, true);
		        wp_enqueue_script('getSiglePortfolio', BASE_URL."/core/ajax/aa.js", false, null, true);
	        } else {
                wp_enqueue_script('cookie', Assets::getJs('cookie'), false, null, true);
            }
        });
    });