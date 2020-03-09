<?php

/// CPTS
define('THEMEROOT', get_stylesheet_directory_uri());
define('TEMPLATE', get_template_directory_uri());
define('IMAGES', THEMEROOT . '/images');

add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption',));

function max_title_length( $title, $max = 300 ) {
    return strlen( $title ) > $max ?
        substr( $title, 0, $max ) : $title;
}

function isotope_terms($parm, $taxonomyOff)
{
    $terms = wp_get_post_terms(get_the_ID(), $taxonomy = [$taxonomyOff]);
    foreach ($terms as $term) {
        echo $term->$parm . ' ';
    }
}


function show_tags()
{
    $post_tags = get_the_tags();
    if (!empty($post_tags)) {
        foreach ($post_tags as $tag) {
            $output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
        }
        return trim($output);
    }
}

function wpdocs_custom_excerpt_length($length) { return 18; }

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

function wpdocs_excerpt_more($more) { return '...'; }

remove_filter('the_excerpt', 'wpautop');
add_filter('show_admin_bar', '__return_false');