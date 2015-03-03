<?php
/**
 * Uninstall Procedure for Custom Upload Folders
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Leave no trail
delete_option( 'jwcuf_select' );
delete_option( 'jwcuf_user_folder_name' );
delete_option( 'jwcuf_folder_name_default' );
delete_option( 'jwcuf_file_types' );
