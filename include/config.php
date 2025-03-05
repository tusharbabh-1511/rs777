<?php

// Check for protocol in environments with reverse proxies
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $protocol = 'https';
} elseif (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $protocol = 'https';
} else {
    $protocol = 'http';
}
// $protocol = 'http';
define('SITE_URL', $protocol . "://" . $_SERVER['HTTP_HOST'] . "/rs777/");
define('IMAGE_URL',SITE_URL."images/");
define('PLUGIN_URL',SITE_URL."plugins/");
define('CSS_URL',SITE_URL."css/");
define('JS_URL',SITE_URL."js/");
define('SITE_DOMAIN_NAME',"Rs777");
define('SITE_DIAPLAY_NAME',"Rs 777");


define('JodiChartPage','jodiChart.php');
define('panaChartPage','panaChart.php');
define('chartPage','charts.php');
define('indexPage','index.php');
// Set time zone based on user preference
$user_time_zone = 'Asia/Kolkata'; // Example from a database or form input
date_default_timezone_set($user_time_zone);

// Output the current date/time in the user's time zone
// echo date('Y-m-d H:i:s');S
?>