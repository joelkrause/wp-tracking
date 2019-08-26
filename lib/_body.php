<?php
add_action( 'init', 'start_wp_tracking_body', 0, 0 );
function start_wp_tracking_body(){
    ob_start( 'wp_tracking_body' );
}
    
function wp_tracking_body($buffer){
    $options = get_option( 'wp_tracking_settings' );
    $body_tags = $options['wp_tracking_after_body'];

    $classes = body_class();
    $body = '';
    $body .= '<body>';
    $body .= $body_tags;
    return preg_replace( '#<body.+>#', $body, $buffer);
}