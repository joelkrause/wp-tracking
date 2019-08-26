<?php
add_action('wp_footer', 'wp_tracking_footer', 5);
function wp_tracking_footer(){
    $options = get_option( 'wp_tracking_settings' );
    $footer_tags = $options['wp_tracking_before_body'];
    
    if($footer_tags){
        echo $footer_tags;
    }
}