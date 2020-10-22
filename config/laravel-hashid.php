<?php

return [

    'salt' => env('LARAVEL_HASHID_SALT', ''),

    'min_hash_length' => env('LARAVEL_HASHID_MIN_LENGTH', 5),

    'hash_alphanumeric_list' => env('LARAVEL_HASHID_ALPHANUMERIC_LIST', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),

];
