<?php


/**
 * Register support for Gutenberg wide images in your theme
 */
function mytheme_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );


//turn this back to true in prod
show_admin_bar(false);

//for page titles
add_theme_support('title-tag');

///


/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
// function blanco_setup() {
//     // Add support for editor styles.
//     add_theme_support( 'editor-styles' );

//   // Enqueue editor styles.
//   add_editor_style( 'style/style-custom.css' );
// }
// add_action( 'after_setup_theme', 'blanco' );



// StyleSheets
require_once( get_template_directory() . '/functions/fn-stylesheets.php' );

// JS
require_once( get_template_directory() . '/functions/fn-js.php' );

// Menus
require_once( get_template_directory() . '/functions/fn-menus.php' );

// Blog & Ecerpt
require_once( get_template_directory() . '/functions/fn-blog.php' );

//Guttenburg Blocks
require_once( get_template_directory() . '/functions/fn-blocks.php' );