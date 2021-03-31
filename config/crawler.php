<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'queue_driver' => env('QUEUE_DRIVER', 'mysql'),

    'site_config' => [
        \App\Sites\W123job::class,
        \App\Sites\NetTruyen::class
    ]
];
