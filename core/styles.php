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
            wp_enqueue_style('commons', Assets::getCss('common'), false, null);

            if (is_page_template('template-home.php')) {
                wp_enqueue_style('home', Assets::getCss('home'), false, null);
            }if (is_page_template('template-cookie.php')) {
                wp_enqueue_style('cookie', Assets::getCss('cookie'), false, null);
            }if (is_page_template('template-contacts.php')) {
		        wp_enqueue_style('contact', Assets::getCss('contact'), false, null);
	        }if (is_page_template('template-teamAll.php')) {
		        wp_enqueue_style('teamAll', Assets::getCss('teamAll'), false, null);
	        }if (is_page_template('template-web.php')) {
		        wp_enqueue_style('homeWeb', Assets::getCss('homeWeb'), false, null);
	        } else if (is_404()) {
                wp_enqueue_style('p404', Assets::getCss('p404'), false, null);
            } else {
                wp_enqueue_style('cookie', Assets::getCss('cookie'), false, null);
            }

            wp_enqueue_style('style', BASE_URL . '/style.css', false, null);
        });
    });
