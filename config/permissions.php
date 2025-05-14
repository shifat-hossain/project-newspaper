<?php

return [
    'groups' => [
        'users' => [
            'name' => 'User Management',
            'permissions' => [
                'view',
                'create',
                'edit',
                'delete',
            ]
        ],
        'roles' => [
            'name' => 'Role Management',
            'permissions' => [
                'view',
                'create',
                'edit',
                'delete',
            ]
        ],
        // Add more groups
    ]
];