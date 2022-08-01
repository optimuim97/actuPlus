<?php
return [

    /**
     * Set Imgur application client_id and secret key, endpoint.
     */

    'client_id' => '0bc6fefc4d8f6fb',

    'client_secret' => env('IMGUR_CLIENT_SECRET', '448c92f48f6e65738a1f0121a7c689d11bdf239c'),

    'endpoint' => env('IMGUR_ENDPOINT', 'https://api.imgur.com/3/image'),
];
