<?php

// Remove dashboard widgets.
add_action('wp_dashboard_setup', function () {
    global $wp_meta_boxes;
    $positions = [
        'dashboard_activity' => 'normal',
        'dashboard_incoming_links' => 'normal',
        'dashboard_plugins' => 'normal',
        'dashboard_recent_comments' => 'normal',
        'dashboard_right_now' => 'normal',
        'dashboard_primary' => 'side',
        'dashboard_quick_press' => 'side',
        'dashboard_recent_drafts' => 'side',
        'dashboard_secondary' => 'side',
        'email_log_dashboard_widget' => 'normal'
    ];
    $boxes = get_theme_support('conceal-disable-dashboard')[0];
    foreach ($boxes as $box) {
        $position = $positions[$box] ?: 'normal';
        unset($wp_meta_boxes['dashboard'][$position]['core'][$box]);
    }
});

// Remove yoast dashboard
add_action('wp_dashboard_setup', 'remove_wpseo_dashboard_overview' );
function remove_wpseo_dashboard_overview()
{
    remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side' );
}