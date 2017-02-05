<?php
/**
 * Slotheme functions and definitions
 *
 */

/* Featured Image */
 add_theme_support( 'post-thumbnails' );

/* Disable auto <p> */
remove_filter( 'the_content', 'wpautop' );
