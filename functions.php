<?php

/**
 * body要素直後に何かを挿入する時 htmlタグではない！
 *
 * @return void
 */
function nina_wp_body_open()
{
    //挿入したいコードを記述
}
add_action('wp_body_open', 'nina_wp_body_open');

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

/**
 * サムネイル画像の出力
 */
add_theme_support('post-thumbnails');

/**
 * タイトルタグの区切り文字を変更
 *
 * @param [type] $separator
 * @return void
 */
function nina_document_title_separetor($separator)
{
    $separator = '|';
    return $separator;
}
add_filter('document_title_separator', 'nina_document_title_separetor');

/**
 * タイトルのカスタマイズ
 *
 * @param [type] $title
 * @return void
 */
function nina_document_title_parts($title)
{
    if (is_home()) {
        unset($title['tagline']);
        $title['title'] = "あなたの輝く人生をninaとともに";
    }
    return $title;
}
add_filter('document_title_parts', 'nina_document_title_parts');

/**
 * font awesome
 *
 * @return void
 */
function add_nina_fontawesome_enqueue_scripts()
{
    wp_enqueue_script('nina_fontawesome', 'https://kit.fontawesome.com/72a93cd7e4.js');
}
add_action('wp_enqueue_scripts', 'add_nina_fontawesome_enqueue_scripts');

/**
 * add css files
 *
 * @return void
 */
function add_nina_styles()
{
    wp_enqueue_style('nina_reset_style', get_template_directory_uri() . '/assets/stylesheets/reset.css');
    wp_enqueue_style('nina_base_style', get_template_directory_uri() . '/assets/stylesheets/base.css');

    if (is_front_page()) {
        wp_enqueue_style('slick_carousel', get_template_directory_uri() . '/assets/stylesheets/slick.css');
        wp_enqueue_style('nina_front_page_style', get_template_directory_uri() . '/assets/stylesheets/front-page.css');
    }

    if (is_archive() || is_tax()) {
        wp_enqueue_style('remodal', get_template_directory_uri() . '/assets/stylesheets/remodal.css');
        wp_enqueue_style('remodal_theme', get_template_directory_uri() . '/assets/stylesheets/remodal-default-theme.css');
        wp_enqueue_style('nina_header_sub_style', get_template_directory_uri() . '/assets/stylesheets/other-page-header.css');
        wp_enqueue_style('nina_singlepage_style', get_template_directory_uri() . '/assets/stylesheets/singlepage.css');
    }

    if (is_page('workshop')) {
        wp_enqueue_style('nina_header_sub_style', get_template_directory_uri() . '/assets/stylesheets/other-page-header.css');
        wp_enqueue_style('nina_singlepage_style', get_template_directory_uri() . '/assets/stylesheets/singlepage.css');
    }

    if (is_page('privacy') || is_page('trade') || is_404()) {
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
    // get jquery
    wp_enqueue_script('jquery');
    if (is_front_page()) {
        // slick jquery plugin cdn
        wp_enqueue_script('slick_carousel_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', '', '', true);
        wp_enqueue_script('nina_main_js', get_template_directory_uri() . '/assets/js/front-page.js', '', '', true);
    }

    if (is_archive() || is_tax()) {
        wp_enqueue_script('nina_remodal_js', get_template_directory_uri() . '/assets/js/remodal.min.js', '', '', true);
        wp_enqueue_script('nina_isolate_js', get_template_directory_uri() . '/assets/js/single-page.js', '', '', true);
    }

    if (is_page('workshop') || is_page('privacy') || is_page('trade') || is_404()) {
        wp_enqueue_script('nina_isolate_js', get_template_directory_uri() . '/assets/js/single-page.js', '', '', true);
    }
}
add_action('wp_enqueue_scripts', 'add_nina_scripts');
