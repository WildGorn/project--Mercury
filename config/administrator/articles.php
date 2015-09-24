<?php
/**
 * Created by PhpStorm.
 * User: wildgorn
 * Date: 26.07.15
 * Time: 18:58
 */

return [
    'title' => 'Article',
    'single' => 'article',
    'model' => 'App\Article',
    'columns' => [
        'id',
        'active',
        'title',
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
        ],
        'slug' => [
            'type' => 'text',
        ],
        'body' => [
            'type' => 'wysiwyg',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path() . '/uploads/article/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/article/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/article/small/', 100],
            ],
        ],
    ],
    'form_width' => 800,
];
