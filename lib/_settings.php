<?php
add_action( 'admin_menu', 'wp_tracking_add_admin_menu' );
add_action( 'admin_init', 'wp_tracking_settings_init' );


function wp_tracking_add_admin_menu(  ) { 
	add_menu_page( 'Tracking Tags', 'Tracking Tags', 'manage_options', 'wp_tracking', 'wp_tracking_options_page' );
}


function wp_tracking_settings_init(  ) { 

	register_setting( 'pluginPage', 'wp_tracking_settings' );

	add_settings_section(
		'wp_tracking_pluginPage_section', 
		__( '', 'wp-tracking' ), 
		'wp_tracking_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'wp_tracking_head', 
		__( 'Head Tags', 'wp-tracking' ), 
		'wp_tracking_head_render', 
		'pluginPage', 
		'wp_tracking_pluginPage_section' 
	);

	add_settings_field( 
		'wp_tracking_after_body', 
		__( 'After Body Tags', 'wp-tracking' ), 
		'wp_tracking_after_body_render', 
		'pluginPage', 
		'wp_tracking_pluginPage_section' 
	);

    add_settings_field( 
		'wp_tracking_before_body', 
		__( 'Before Body Tags', 'wp-tracking' ), 
		'wp_tracking_before_body_render', 
		'pluginPage', 
		'wp_tracking_pluginPage_section' 
	);

}


function wp_tracking_before_body_render(  ) { 
	$options = get_option( 'wp_tracking_settings' );
	?>
	<textarea id="wp_track_before_body" name='wp_tracking_settings[wp_tracking_before_body]'><?php echo $options['wp_tracking_before_body']; ?></textarea>
	<?php

}


function wp_tracking_head_render(  ) { 
	$options = get_option( 'wp_tracking_settings' );
	?>
	<textarea id="wp_track_head" name='wp_tracking_settings[wp_tracking_head]'><?php echo $options['wp_tracking_head']; ?></textarea>
	<?php

}


function wp_tracking_after_body_render(  ) { 
	$options = get_option( 'wp_tracking_settings' );
	?>
	<textarea id="wp_track_after_body" name='wp_tracking_settings[wp_tracking_after_body]'><?php echo $options['wp_tracking_after_body']; ?></textarea>
	<?php

}


function wp_tracking_settings_section_callback(  ) { 
	echo __( 'The After Body Tags code snippet needs the <code>wp_body_open()</code> hook added to the header.php file of the theme. Without this, the snippet won\'t be added!', 'wp-tracking' );
}


function wp_tracking_options_page(  ) { 

		?>
		<form action='options.php' method='post'>

			<h1>Tracking Tags</h1>

			<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
			?>

		</form>
		<?php

}
