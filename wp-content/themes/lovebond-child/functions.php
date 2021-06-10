<?php

// 子テーマのstyle.cssを後から読み込む
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('style')
    );

/* functions.php に記述 */
    add_shortcode('url', 'shortcode_url');
    function shortcode_url() {
    return get_bloginfo('url');
    }
    add_shortcode('tdir', 'tmp_dir');
    function tmp_dir() {
    return get_template_directory_uri();
    }
    add_shortcode('cdir', 'child_dir');
    function child_dir() {
    return get_stylesheet_directory_uri();
    }



}