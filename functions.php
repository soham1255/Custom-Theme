<?php
/**
 * Custom Theme functions and definitions
 *
 * @package WordPress
 * @subpackage CTS
 * @since CTS 1.0.0
 */

/** Define constant */
define('CTS_THEME_URI', get_template_directory_uri()); 
define('CTS_THEME_DIR', get_template_directory());
define('CTS_THEME_DIR_INC', ENHANZ_THEME_DIR . '/includes/');
define('CTS_THEME_DIR_CLS', ENHANZ_THEME_DIR_INC . '/classes/');
define('CTS_THEME_ASSETS', ENHANZ_THEME_URI . '/assets/');

/** Include other files */
require_once( 'theme-map.php' );

/** Initialise theme */
require_once( CTS_THEME_DIR_CLS . 'class.theme-setup.php' );

/** Helper functions */
require_once( 'theme-functions.php' );
