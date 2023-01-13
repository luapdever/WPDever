<?php
function dever_admin_contents() {
    require get_template_directory() . "/admin-pages/index.php";
}

function dever_add_links_menu() {
    add_menu_page(
        'DEVER Administration',
        'DEVER',
        'administrator',
        'admin-dever',
        'dever_admin_contents',
        'dashicons-admin-page',
        100
    );
}
add_action('admin_menu', 'dever_add_links_menu');