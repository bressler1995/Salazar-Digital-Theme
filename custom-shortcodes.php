<?php

    function sdigital_custom_menu() {
        $menu_items = '';
        
        if ( has_nav_menu('menu-1')) {
            $menu_items = wp_nav_menu(array( 'theme_location' => 'menu-1',
							'menu_class' => 'eccent_desktop_menu',
							'menu_id' => 'eccent_desktop_menu'
			)); 
        }

        return $menu_items;
            
    }

    add_shortcode('showthemenu', 'sdigital_custom_menu');
?>