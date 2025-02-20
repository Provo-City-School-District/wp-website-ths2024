<?php
$theme_version = '1.0.1';
function my_theme_variables()
{
    $my_theme_variables = array(
        'logo' => get_stylesheet_directory_uri() . '/assets/img/site-logo.png',
        'full_school_name' => 'Timpview High School',
        'short_school_name' => 'Timpview High',
        'school_address' => '3570 Timpview Dr Provo, Utah 84604',
        'google_tag_manager_id' => 'G-FTPJPV04N2',
        // 'top_sidebar_cal' => '[calendar id="2064"]',
        // 'bot_sidebar_cal' => '[calendar id="2066"]',
        'front_page_cal' => '[calendar id="2751"]',
        // 'insta_link' => 'http://#',
        // 'facebook_link' => 'http://#',
        // 'twitter_link' => 'http://#',
        'full_calendar_link' => 'http://#',
        // 'search_icon' => get_template_directory_uri() . '/assets/icons/search-loupe.svg',
        'blogLink' => 'https://provohigh.provo.edu/category/news/',
    );
    return $my_theme_variables;
}
// function sidebar_menu()
// {
//     //TODO: add a wp menu here instead of hardcoding
//     echo "<ul>";
//     echo "<li><a href='https://provohigh.provo.edu/school-calendar/a-b-calendar-month-view/'>A/B Calendar Month View</a></li>";
//     echo "</ul>";
// }
function pcsd_child_theme_enqueue_styles()
{
    global $theme_version;
    wp_enqueue_style('variables', get_stylesheet_directory_uri() . '/assets/css/variables.css', '', $theme_version, false);
}
add_action('wp_enqueue_scripts', 'pcsd_child_theme_enqueue_styles', 9999);
