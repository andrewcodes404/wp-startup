<?php

// MENUS -- MENUS -- MENUS -- MENUS --
add_theme_support('menus');

///create  function using registar_theme_menus() inside it, and adding parameters in the array
function register_theme_menus()
{
    register_nav_menus(
        array(
            'nav-menu' => _('Navigation'),
          
        )
    );
}
//don’t forget to call the function… like this
add_action('init', 'register_theme_menus');

?>