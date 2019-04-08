<?php
    if (!defined('ABSPATH')) exit();

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    add_action('carbon_fields_register_fields', 'crb_attach_contact_page_meta');
    function crb_attach_contact_page_meta(){

        Container::make( 'post_meta', "Отзывовы" )
            ->where( 'post_type', '=', 'page' )
            ->where( 'post_template', '=', 'template-contacts.php' )
            ->add_fields( [
                    Field::make( 'complex', 'contact_persons', 'Менеджеры' )
                        ->add_fields( 'contact_person', [
                                Field::make( 'image', 'photo', __( 'photo' ) )
                                    ->set_value_type( 'url' )
                                    ->set_width( 50 ),
                                Field::make( 'text', 'person_name', __( 'Имя' ) )
                                    ->set_width( 50 ),
                                Field::make( 'text', 'person_position', 'Должнасть' )
                                    ->set_width( 50 ),
                                Field::make( 'text', 'person_email', 'Email' )
                                    ->set_width( 50 ),
                            ]
                        ),
                    Field::make( 'separator', 'crb_contact_info_op_sep', 'Контактная информаия'),
                    Field::make( 'complex', 'contact_information', 'Контакты' )
                        ->add_fields( 'contact_person', [
                                Field::make( 'text', 'country', 'Страна' ),
                                Field::make( 'text', 'address', 'Адресс' )
                            ]
                        ),
                ]
            );

//        Container::make( 'post_meta', "Новости" )
//            ->where( 'post_type', '=', 'page' )
//            ->where( 'post_template', '=', 'template-home.php' )
//            ->add_fields( [
//                Field::make( 'select', 'first_new_id', 'Выберите первую новость' )
//                    ->add_options( 'news_selecting' ),
//                Field::make( 'select', 'second_new_id', 'Выберите вторую новость' )
//                    ->add_options( 'news_selecting' ),
//                Field::make( 'select', 'third_new_id', 'Выберите третью новость' )
//                    ->add_options( 'news_selecting' ),
//            ] );

//        Container::make( 'post_meta', "Слайдер" )
//            ->where( 'post_type', '=', 'page' )
//            ->where( 'post_template', '=', 'template-home.php' )
//            ->add_fields( [
//                    Field::make( 'complex', 'crb_slides', 'Главный слидер' )
//                        ->add_fields( 'slide', [
//                                Field::make( 'text', 'main_speaker', 'Главный спикер' )
//                                    ->set_width( 30 ),
//                                Field::make( 'text', 'slide_title', __( 'Название' ) )
//                                    ->set_width( 70 ),
//                                Field::make( 'text', 'slide_day', 'День' )
//                                    ->set_width( 10 ),
//                                Field::make( 'text', 'slide_month', 'Месяц' )
//                                    ->set_width( 20 ),
//                                Field::make( 'text', 'slide_year', 'Год' )
//                                    ->set_width( 10 ),
//                                Field::make( 'text', 'slide_address', 'Адрес' )
//                                    ->set_width( 40 ),
//                                Field::make( 'text', 'slide_link', 'Ссылка' )
//                                    ->set_width( 50 ),
//                                Field::make( 'image', 'slide_image', __( 'Image' ) )
//                                    ->set_value_type( 'url' )
//                                    ->set_width( 50 ),
//                            ]
//                        ),
//                ]
//            );
//        Container::make( 'post_meta', "Акции недели" )
//            ->where( 'post_type', '=', 'page' )
//            ->where( 'post_template', '=', 'template-home.php' )
//            ->add_fields( [
//                    Field::make( 'image', 'aside_banner', 'Баннер' )
//                        ->set_value_type( 'url' )
//                        ->set_width( 50 ),
//                    Field::make( 'text', 'aside_banner_link', 'Ссылка баннера' )
//                        ->set_width( 50 ),
//                    Field::make( 'complex', 'discount_articles', 'Список акций недели' )
//                        ->add_fields( 'discount_article', [
//                                Field::make( 'select', 'first_new_id', 'Выберите акцию' )
//                                    ->add_options( 'discount_selecting' )
//                                    ->set_width( 50 ),
//                            ]
//                        ),
//                ]
//            );
//        Container::make( 'post_meta', "Партнерство" )
//            ->where( 'post_type', '=', 'page' )
//            ->where( 'post_template', '=', 'template-home.php' )
//            ->add_fields( [
//                    Field::make( 'complex', 'partnership', 'Список файлов для скачки' )
//                        ->add_fields( 'discount_article', [
//                                Field::make( 'textarea', 'link_text', 'Текст ссылки' )
//                                    ->set_width( 70 ),
//                                Field::make( 'file', 'link_file', 'Файл' )
//                                    ->set_value_type( 'url' )
//                                    ->set_width( 30 ),
//                            ]
//                        ),
//                ]
//            );
    }

    add_action('after_setup_theme', 'crb_load_contact_meta');
    function crb_load_contact_meta() {
        \Carbon_Fields\Carbon_Fields::boot();
    }