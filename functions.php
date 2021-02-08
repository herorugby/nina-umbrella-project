<?php

/**
 * add css files
 *
 * @return void
 */
function add_nina_styles()
{
    // common css file
    wp_enqueue_style('nina_reset_style', get_template_directory_uri() . '/assets/stylesheets/reset.css');
    wp_enqueue_style('nina_footer_style', get_template_directory_uri() . '/assets/stylesheets/footer.css');
    if (is_front_page()) {
        // front-page css file
        wp_enqueue_style('nina_front_page_style', get_template_directory_uri() . '/assets/stylesheets/front-page.css');
    } else if (is_home()) {
        // index css files
        wp_enqueue_style('nina_index_style', get_template_directory_uri() . '/assets/stylesheets/otherspage-header.css');
        wp_enqueue_style('nina_index_style', get_template_directory_uri() . '/assets/stylesheets/page-main.css');
        wp_enqueue_style('nina_index_style', get_template_directory_uri() . '/assets/stylesheets/index-post-parts.css');
    } else if (is_page('workshop')) {
        // page-workshop css files
        wp_enqueue_style('nina_page_workshop_style', get_template_directory_uri() . '/assets/stylesheets/otherspage-header.css');
        wp_enqueue_style('nina_page_workshop_style', get_template_directory_uri() . '/assets/stylesheets/page-main.css');
    } else {
        // page-privacy $ page-trade css files
        wp_enqueue_style('nina_page_style', get_template_directory_uri() . '/assets/stylesheets/otherspage-header.css');
        wp_enqueue_style('nina_page_style', get_template_directory_uri() . '/assets/stylesheets/policy.css');
    }
}
add_action('wp_enqueue_scripts', 'add_nina_styles');

/**
 * add js files
 *
 * @return void
 */
function add_nina_scripts()
{
    // slick css cdn
    wp_enqueue_style('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css');
    // get jquery
    wp_enqueue_script('jquery');
    // slick jquery plugin cdn
    wp_enqueue_script('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js');
    if (is_front_page()) {
        wp_enqueue_script('nina-main', get_template_directory_uri() . '/assets/js/front-page.js');
    } else if (is_home()) {
        wp_enqueue_script('nina-main', get_template_directory_uri() . '/assets/js/page.js');
        wp_enqueue_script('nina-main', get_template_directory_uri() . '/assets/js/index-slick.js');
    } else {
        wp_enqueue_script('nina-main', get_template_directory_uri() . '/assets/js/page.js');
    }
}
add_action('wp_enqueue_scripts', 'add_nina_scripts');

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

function nina_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}

add_filter('document_title_separator', 'nina_document_title_separator');

function nina_document_title_parts($title)
{
    if (is_home()) {
        unset($title['tagline']);
        $title['title'] = 'nina is with you';
    }
    return $title;
}
add_filter('document_title_parts', 'nina_document_title_parts');
