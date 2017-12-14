<?php

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

if (env('ABSPATH')) {
    define('ABSPATH', getcwd().'/'.env('ABSPATH'));
} else {
    define('ABSPATH', __DIR__.'/../../../');
}

system('rm -rf '.ABSPATH.'/wp-content/uploads/*');

$path = realpath(dirname(PHPUNIT_COMPOSER_INSTALL).'/lumenpress/testing');

system("php $path/tests/includes/install.php");

require $path.'/tests/wp-tests-load.php';

_delete_all_posts();

// require_once ABSPATH.'wp-load.php';
require_once ABSPATH.'wp-admin/includes/plugin.php';

activate_plugin('advanced-custom-fields-pro/acf.php');
