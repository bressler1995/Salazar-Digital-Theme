<?php

    function sdigital_thebubble() {
        $result = '<button id="sdigital_nav_button" class="sdigital_nav_button" type="button"><img src="' . get_stylesheet_directory_uri() . '/assets/svg/menu.svg"></button>';

        return $result;
            
    }

    add_shortcode('showthebubble', 'sdigital_thebubble');
?>