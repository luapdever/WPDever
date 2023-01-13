<?php

function dever_shortcode_full_name($atts) {
    
    if(!is_user_logged_in()) {
        return 'Invité'; 
    }
    $current_user = wp_get_current_user();
    
    return $current_user->user_firstname . ' <span class="bold">' . $current_user->last_name . '</span>';
}

function dever_make_bold($atts) {
    shortcode_atts([
        "text" => "Text..."
    ], $atts);
    
    return '<span class="bold important">' . $atts["text"] . '</span>';
}
add_shortcode('fullname', 'dever_shortcode_full_name');
add_shortcode('important', 'dever_make_bold');