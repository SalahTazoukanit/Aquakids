<?php

function register_my_menus()
{
    register_nav_menus(
        array(
            'header' => ('Header Menu'),
            'footer' => ('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');
