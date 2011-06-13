<?php
/** Add */
if( ! function_exists('fb_merge_admin_menu') ):
add_action('admin_menu', 'fb_merge_admin_menu',0);
function fb_merge_admin_menu()
{
    add_menu_page("Facebook Merge", "FB Merge", 'manage_options', "fb-merge", "fb_merge_home_page");
    $page = add_submenu_page("fb-merge", "Facebook Merge Home","Home", 'manage_options', "fb-merge", "fb_merge_home_page");
    add_action('admin_print_styles-' . $page, 'fb_merge_add_queue');
    do_action('fb_merge_submenu');
}

function fb_merge_home_page() 
{?>
    <div class="wrap">
        <h2>Facebook Merge</h2>
            <?php do_action('fb_merge_home'); ?>
    </div>
<?php
}

function fb_merge_add_queue()
{
    wp_enqueue_style('thickbox');
    wp_enqueue_script('thickbox');
}
endif;
