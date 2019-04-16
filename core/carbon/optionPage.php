<?php
    if (!defined('ABSPATH')) exit();

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
    function crb_attach_theme_options() {
        $basic_options_container = Container::make('theme_options', __('Настройки темы'))
            ->set_page_file('theme-options')
            ->set_page_menu_title('Настройки темы')
            ->set_icon('dashicons-carrot')
            ->add_fields([
                Field::make('image', 'crb_logo_img', __('Logo'))
                    ->set_value_type('url')
                    ->set_width(50),
//------------------------------------------Контактная информаця
                Field::make('separator', 'crb_pages_op_sep', __('Страницы')),
                Field::make('select', 'crb_contact_us_link', 'Страница контактов')
                    ->add_options('page_selecting')
                    ->set_width(50),
                //------------------------------------------Страница cookie
                Field::make('select', 'wsb_cookie_policy', 'Страница cookie')
                     ->add_options('page_selecting')
                     ->set_width(50),
                Field::make('separator', 'crb_contact_data_op_sep', __('Социальные ссылки')),
                Field::make('text', 'crb_fb', 'Ссылка facebook')
                     ->set_width(50),
                Field::make('text', 'crb_insta', 'Ссылка instagram')
                     ->set_width(50),

                Field::make('separator', 'crb_mail_op_sep', __('Email для контактной формы')),
                Field::make('text', 'crb_form_mail', 'Email'),
            ]);
    }

    add_action('after_setup_theme', 'crb_load');
    function crb_load() {
        \Carbon_Fields\Carbon_Fields::boot();
    }