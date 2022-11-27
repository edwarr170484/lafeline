<?php

add_action( 'wp_enqueue_scripts', 'load_theme_script' );

function load_theme_script() {
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.1', 'all');

    wp_localize_script(
        'custom', 
        'front_script',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ), 
            'nonce' => wp_create_nonce('wplb-nonce')
        )
    );
}

add_action( 'wp_ajax_send_call_email', 'send_call_email');

function send_call_email(){
    $admin_email = get_site_option( 'admin_email' );
    $result = wp_mail($admin_email, 'Request to callback', 'Phone number: ' . $_POST['phone'] );

    wp_send_json(['message' => 'We call you as soon as possible', 'error' => $result]);

    wp_die();
}