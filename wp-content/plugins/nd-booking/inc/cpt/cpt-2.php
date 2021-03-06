<?php

///////////////////////////////////////////////////CPT2///////////////////////////////////////////////////////////////
function nd_booking_create_post_type_2() {

    register_post_type('nd_booking_cpt_2',
        array(
            'labels' => array(
                'name' => __('Services', 'nd-booking'),
                'singular_name' => __('Services', 'nd-booking')
            ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'services' ),
            'menu_icon'   => 'dashicons-awards',
            'supports' => array('title', 'editor', 'thumbnail' )
        )
    );
}
add_action('init', 'nd_booking_create_post_type_2');

