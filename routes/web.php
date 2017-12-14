<?php

$app->get('/', function () {
    return;
});

app('wp.router')->group([
    'namespace' => App\Http\Controllers::class
], function ($router) {
    $router->is(['template' => 'home'], function ($page) {
        return $page;
    });
});
