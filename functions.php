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

    if (is_home() || is_archive() || is_tax()) {
        // remodal css
        wp_enqueue_style('remodal', get_template_directory_uri() . '/assets/stylesheets/remodal.css');
        wp_enqueue_style('remodal_theme', get_template_directory_uri() . '/assets/stylesheets/remodal-default-theme.css');
    }

    if (is_home()) {
        // slick css cdn
        wp_enqueue_style('slick_carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css');
        wp_enqueue_style('slick_carousel_theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css');
        // wp_enqueue_style('nina_front_page_style', get_template_directory_uri() . '/assets/stylesheets/front-page.css');
    }

    if (is_archive() || is_page('workshop') || is_tax()) {
        wp_enqueue_style('nina_header_sub_style', get_template_directory_uri() . '/assets/stylesheets/other-page-header.css');
        // wp_enqueue_style('nina_singlepage_style', get_template_directory_uri() . '/assets/stylesheets/singlepage.css');
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
    // get jquery
    wp_enqueue_script('jquery');
    // slick jquery plugin cdn
    wp_enqueue_script('slick_carousel_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js');


    if (is_home()) {
        wp_enqueue_script('nina_remodal_js', get_template_directory_uri() . '/assets/js/remodal.min.js');
        wp_enqueue_script('nina_main_js', get_template_directory_uri() . '/assets/js/front-page.js', '', '', true);
    } else if (is_archive()) {
        wp_enqueue_script('nina_remodal_js', get_template_directory_uri() . '/assets/js/remodal.min.js');
        wp_enqueue_script('nina_isolate_js', get_template_directory_uri() . '/assets/js/single-page.js', '', '', true);
    } else if (is_page('workshop') || is_page('privacy') || is_page('trade') || is_tax()) {
        wp_enqueue_script('nina_isolate_js', get_template_directory_uri() . '/assets/js/single-page.js', '', '', true);
    }
}
add_action('wp_enqueue_scripts', 'add_nina_scripts');


// add_action('init', function () {
//     register_taxonomy(
//         'post_tag',
//         ['post', 'item'],
//         [
//             'hierarchical' => false,
//             'query_var'    => 'tag',
//         ]
//     );
// });
// add_action('pre_get_posts', function ($query) {
//     if (is_admin() && !$query->is_main_query()) {
//         return;
//     }
//     if ($query->is_category() || $query->is_tag()) {
//         $query->set('post_type', ['post', 'item']);
//     }
// });

// function add_tag_post_column_title($columns)
// {
//     $columns['slug'] = "tags";
//     return $columns;
// }
// function add_tag_post_column($column_name, $post_id)
// {
//     if ($column_name == 'slug') {
//         $tags = get_the_tags();
//         if ($tags) {
//             foreach ($tags as $tag) {
//                 echo $tag->name . ' ';
//             }
//         }
//     }
// }
// add_filter('manage_item_posts_columns', 'add_tag_post_column_title');
// add_action('manage_item_posts_custom_column', 'add_tag_post_column', 10, 2);
