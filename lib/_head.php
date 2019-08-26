<?php
function wp_tracking_head(){
    $options = get_option( 'wp_tracking_settings' );
    $head_tags = $options['wp_tracking_head'];
    
    if($head_tags){
        echo $head_tags;
    }
}
add_action('wp_head', 'wp_tracking_head', 5);