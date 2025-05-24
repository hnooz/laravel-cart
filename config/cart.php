<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cart Storage Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default cart storage driver that will be used
    | to store cart items. You may set this to any of the storage options
    | listed below.
    |
    | Supported: "database", "session", "both"
    |
    */
    'driver' => env('CART_DRIVER', 'both'),

    /*
    |--------------------------------------------------------------------------
    | Cart Database Connection
    |--------------------------------------------------------------------------
    |
    | This is the database connection that will be used to store cart items
    | when using the "database" or "both" storage driver.
    |
    */
    'connection' => env('CART_DB_CONNECTION', null),

    /*
    |--------------------------------------------------------------------------
    | Cart Items Table
    |--------------------------------------------------------------------------
    |
    | This is the table that will be used to store cart items when using
    | the "database" or "both" storage driver.
    |
    */
    'table' => 'cart_items',

    /*
    |--------------------------------------------------------------------------
    | Session Key
    |--------------------------------------------------------------------------
    |
    | This is the session key that will be used to store cart items when
    | using the "session" or "both" storage driver.
    |
    */
    'session_key' => 'shopping_cart',
];
