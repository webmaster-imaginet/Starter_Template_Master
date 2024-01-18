<?php
add_action('init', function () {
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials'),
            'singular_name' => __('Testimonial')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'supports' => array('thumbnail', 'editor', 'title')
    ));
    register_post_type('news', array(
        'labels' => array(
            'name' => __('News'),
            'singular_name' => __('News')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'news'),
        'supports' => array('thumbnail', 'editor', 'title')
    ));
});
