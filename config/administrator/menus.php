<?php
/**
 * Created by PhpStorm.
 * User: wildgorn
 * Date: 29.07.15
 * Time: 20:09
 */

return [
    'title' => 'Menu',
    'single' => 'item',
    'model' => 'App\Menu',
    'columns' => [
        'id',
        'active',
        'title',
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool'
        ],
        'weight' => [
            'type' => 'number'
        ],
        'title' => [
            'type' => 'text'
        ],
        'url' => [
            'type' => 'text'
        ]
    ]
];