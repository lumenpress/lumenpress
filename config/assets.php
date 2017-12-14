<?php

/*
|-----------------------------------------------------
| Assets
|-----------------------------------------------------
|
*/
return [

    'base_path' => get_template_directory().'/client/build',

    'base_url' => get_template_directory_uri().'/client/build',

    // 'editor_style' => 'editor-style.css',

    'deregister' => [],

    'dequeue' => [],

    'register' => [],

    'enqueue' => [

        'css:theme' => [
            'src' => 'assets/style.css',
            'ver' => '1.0.6',
        ],

        'js:theme' => [
            'src' => 'assets/main.js',
            'ver' => '1.0.6',
            'deps' => ['jquery'],
            'in_footer' => true,
        ],

    ],

];
