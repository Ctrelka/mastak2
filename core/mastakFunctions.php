<?php

    function page_selecting() {
        $my_query   = new WP_Query();
        $pages = $my_query->query(['post_type' => 'page']);

        $news_list = [];
        foreach ($pages as $page) {
            $news_list[$page->ID] = $page->post_title;
        }
        return $news_list;
    }
