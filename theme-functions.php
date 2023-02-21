<?php

/**
 * Theme helper functions
 *
 * @package CTS
 * 
 */

/**
 * Get theme logo
 */
function cts_get_logo($size = 'full')
{
    $logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), $size);
    return $logo;
}
