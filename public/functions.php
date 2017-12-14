<?php

if (! defined('LP_ROOTPATH')) {
    define('LP_ROOTPATH', __DIR__.'/../');
}

putenv('APP_DEBUG='.(WP_DEBUG?'true':'false'));
putenv('DB_CONNECTION=mysql');
putenv('DB_HOST='.DB_HOST);
putenv('DB_DATABASE='.DB_NAME);
putenv('DB_USERNAME='.DB_USER);
putenv('DB_PASSWORD='.DB_PASSWORD);
putenv('DB_PREFIX='.$GLOBALS['table_prefix']);
putenv('APP_TIMEZONE='.get_option('timezone_string'));

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require_once LP_ROOTPATH.'bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

add_action('template_redirect', function () use ($app) {
    if ( is_robots() || is_feed() || is_trackback() ) {
        return;
    }
    $app->run();
}, 9999);

add_action('acf/init', function () {
    acf_update_setting('google_api_key', 'AIzaSyAhH4z2r-eHCT0g-HC9R3XK8ddrLTdYj-w');
});
