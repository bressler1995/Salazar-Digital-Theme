<?php

    // function sdigital_thebubble() {
    //     $result = '<button id="sdigital_nav_button" class="sdigital_nav_button" type="button"><img src="' . get_stylesheet_directory_uri() . '/assets/svg/menu.svg"></button>';

    //     return $result;
            
    // }

    // add_shortcode('showthebubble', 'sdigital_thebubble');

    function sdigital_vimeofunction() {
        $result = '';
        $the_id = get_the_ID();
        
        if($the_id != false) {
            $scrolling_video = get_field("scrolling_video", $the_id);

            if( $scrolling_video ) {
                if(str_contains($scrolling_video, 'https://vimeo.com/')) {
                    $scrolling_video_array = explode("https://vimeo.com/", $scrolling_video);
                    if(empty($scrolling_video_array) == false) {
                        if(count($scrolling_video_array) == 2) {
                            $result .= '<div class="sdigital_vimeocontainer">
                                <iframe src="https://player.vimeo.com/video/' . $scrolling_video_array[1] . '?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>';
                        }
                    }
                }
            }

        }

        return $result;
    }

    add_shortcode('showvimeo', 'sdigital_vimeofunction');
?>