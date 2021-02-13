<?php

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

/**
 * サムネイル画像の出力
 */
add_theme_support('post-thumbnails');

function nina_document_title_separetor($separator)
{
    $separator = '|';
    return $separator;
}
add_filter('document_title_separator', 'nina_document_title_separetor');

function nina_document_title_parts($title)
{
    if (is_home()) {
        unset($title['tagline']);
        $title['title'] = "Always sparkle with 'nina'";
    }
    return $title;
}
add_filter('document_title_parts', 'nina_document_title_parts');

/**
 * add css files
 *
 * @return void
 */
function add_nina_styles()
{
    wp_enqueue_style('nina_reset_style', get_template_directory_uri() . '/assets/stylesheets/reset.css');
    if (is_home()) {
        wp_enqueue_style('nina_front_page_style', get_template_directory_uri() . '/assets/stylesheets/front-page.css');
    }
    if (is_archive() || is_page('workshop')) {
        wp_enqueue_style('nina_header_sub_style', get_template_directory_uri() . '/assets/stylesheets/other-page-header.css');
        wp_enqueue_style('nina_singlepage_style', get_template_directory_uri() . '/assets/stylesheets/singlepage.css');
    }
    if (is_page('privacy') || is_page('trade')) {
        wp_enqueue_style('nina_header_sub_style', get_template_directory_uri() . '/assets/stylesheets/other-page-header.css');
        wp_enqueue_style('nina_policy_style', get_template_directory_uri() . '/assets/stylesheets/policy.css');
    }
    wp_enqueue_style('nina_footer_style', get_template_directory_uri() . '/assets/stylesheets/footer.css');
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
    if (is_home()) {
        wp_enqueue_script('nina-main-js', get_template_directory_uri() . '/assets/js/front-page.js', '', '', true);
    } else if (is_archive() || is_page('workshop') || is_page('privacy') || is_page('trade')) {
        wp_enqueue_script('nina-workshop-js', get_template_directory_uri() . '/assets/js/single-page.js', '', '', true);
    }
}
add_action('wp_enqueue_scripts', 'add_nina_scripts');
