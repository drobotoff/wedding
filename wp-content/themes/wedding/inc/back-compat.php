<?php
/**
 * Wedding back compat functionality
 *
 * Prevents Wedding from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Wedding 1.0.0
 */

/**
 * Prevent switching to Wedding on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Wedding 1.0.0
 */
function wedding_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'wedding_upgrade_notice' );
}
add_action( 'after_switch_theme', 'wedding_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Wedding on WordPress versions prior to 4.7.
 *
 * @since Wedding 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function wedding_upgrade_notice() {
	/* translators: %s: WordPress version. */
	$message = sprintf( __( 'Wedding requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'wedding' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Wedding 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function wedding_customize() {
	wp_die(
		sprintf(
			/* translators: %s: WordPress version. */
			__( 'Wedding requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'wedding' ),
			$GLOBALS['wp_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'wedding_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Wedding 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function wedding_preview() {
	if ( isset( $_GET['preview'] ) ) {
		/* translators: %s: WordPress version. */
		wp_die( sprintf( __( 'Wedding requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'wedding' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'wedding_preview' );
