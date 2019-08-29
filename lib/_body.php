<?php

// Action to add code to wp_body_open();
function wp_tracking_body_open() {
    $options = get_option( 'wp_tracking_settings' );
    $body_tags = $options['wp_tracking_after_body'];
    echo $body_tags;
}

// Old way of adding code
function start_wp_tracking_body(){
    ob_start( 'wp_tracking_body' );
}
    
function wp_tracking_body($buffer){
    $options = get_option( 'wp_tracking_settings' );
    $body_tags = $options['wp_tracking_after_body'];

    if($body_tags){
        $body = '';
        $body .= '<body '.$classes.'>';
        $body .= $body_tags;
        return preg_replace( '#<body.+>#', $body, $buffer);
    }
}

if ( ! function_exists( 'wp_body_open' ) ) {
    add_action( 'init', 'start_wp_tracking_body' );
} else {
    add_action( 'wp_body_open', 'wp_tracking_body_open' );
}