<?php

// Action to add code to wp_body_open();
function wp_tracking_body_open() {
    $options = get_option( 'wp_tracking_settings' );
    $body_tags = $options['wp_tracking_after_body'];
    echo $body_tags;
}
add_action( 'wp_body_open', 'wp_tracking_body_open' );