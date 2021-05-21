<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'c,r,u,d',
        ],

        'restaurant' => [
            'users' => 'c,r,u',
            'payments' => 'r,u',
            'profile' => 'c,u,d'
        ],

        'client' => [
            'users' => 'c,r,u',
            'payments' => 'c,r,u',
            'profile' => 'c,r,u'
        ],

        'livreur' => [
            'users' => 'c,r,u,',
            'payments' => 'c,r,u',
            'profile' => 'c,r,u,'
        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
