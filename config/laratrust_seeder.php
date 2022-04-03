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
            'carts' => 'r,d',
            'products' => 'c,r,u,d',
            'orders' => 'r,d',
            'payments' => 'r,d',
            'shipments' => 'c,r,u,d',
            'orderdetails' => 'r,d',
        ],
        'seller' => [
            'users' => 'r',
            'carts' => 'r',
            'products' => 'c,r,u,d',
            'orders' => 'r',
            'payments' => 'r',
            'shipments' => 'c,r,u,d',
            'orderdetails' => 'r',
        ],
        'customer' => [
            'users' => 'r',
            'carts' => 'c,r,u,d',
            'products' => 'r',
            'orders' => 'c,r,u,d',
            'payments' => 'c,r',
            'shipments' => 'r',
            'orderdetails' => 'r',
        ],
        
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
