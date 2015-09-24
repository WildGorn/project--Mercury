<?php
/**
 * Created by PhpStorm.
 * User: wildgorn
 * Date: 26.07.15
 * Time: 17:25
 */

return [
    'title' => 'Users',
    'single' => 'user',
    'model' => 'App\User',
    'columns' => [
        'id',
        'email',
    ],
    'edit_fields' => [
        'email' => [
            'type' => 'text'
        ]
    ]
];