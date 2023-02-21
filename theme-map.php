<?php
/**
 * This contains all the files we use
 *
 * @file
 * @package CTS
 */

// class map, use for autoload.


$class_map = array(
	'Cts\\Component\\Cts\Component' => CTS_THEME_DIR_CLS . '/class.theme-setup.php',
	'Cts\\Component\\CtsCustom_Posts' => CTS_THEME_DIR_CLS . '/class.custom-posts.php',
	'Cts\\Component\\Cts_Page_Content' => CTS_THEME_DIR_CLS . '/class.page-content.php',
);


spl_autoload_register(
	function ( $class ) use ( $class_map ) {
		if ( isset( $class_map[ $class ] ) ) {
			require_once $class_map[ $class ];
		}
	}
);
