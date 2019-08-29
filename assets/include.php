<?php
do_action( 'wp_enqueue_code_editor' );

function add_page_scripts_enqueue_script($hook) {
    if( $hook == 'toplevel_page_wp_tracking' ) {
        wp_enqueue_code_editor( array( 'type' => 'text/html' ) );
        wp_enqueue_script( 'js-code-editor', plugin_dir_url( __FILE__ ) . '/js/code-editor.js', array( 'jquery' ), '', true );
    }
}
add_action( 'admin_enqueue_scripts', 'add_page_scripts_enqueue_script' );