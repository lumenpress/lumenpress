<?php


return [

    'nav_menus' => [
        'main' => 'Main Navigation',
    ],

    'post_templates' => [
        'home' => 'Home Page',
    ],

    'post_types' => [

        'example' => [
            'label'               => 'Example',
            'model'               => App\Models\Post::class,
            'hierarchical'        => false,
            // 'description'         => 'description',
            'taxonomies'          => [],
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => null,
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => false,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => [
                'title',
                // 'editor',
                // 'author',
                // 'thumbnail',
                // 'excerpt',
                // 'custom-fields',
                // 'trackbacks',
                // 'comments',
                'revisions',
                // 'page-attributes',
                // 'post-formats',
            ],
        ]

    ],

    'taxonomies' => [

        'example_category' => [
            'labels' => [
                'name' => 'Categories',
                'singular_name' => 'category',
            ],
            'object_type'        => ['example'],
            'public'            => true,
            'show_in_nav_menus' => true,
            'show_admin_column' => false,
            'hierarchical'      => true,
            'show_tagcloud'     => true,
            'show_ui'           => true,
            'query_var'         => true,
            'rewrite'           => true,
            'query_var'         => true,
            'capabilities'      => [],
        ],

    ],

    'term' => App\Models\Term::class,

    'option' => App\Models\Option::class,
];
