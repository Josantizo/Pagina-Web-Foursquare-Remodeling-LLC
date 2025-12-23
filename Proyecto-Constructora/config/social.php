<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Social Media Links
    |--------------------------------------------------------------------------
    |
    | Configure your social media links here. These will be used throughout
    | the application to link to your social media profiles.
    |
    | Facebook: Use the format https://m.me/USERNAME for Messenger
    |           or https://www.facebook.com/USERNAME for profile
    |
    | Instagram: Use https://www.instagram.com/USERNAME for profile
    |             or https://www.instagram.com/direct/inbox/ for messages
    |
    */

    'facebook' => env('SOCIAL_FACEBOOK_URL', 'https://m.me/YOUR_FACEBOOK_USERNAME'),
    'instagram' => env('SOCIAL_INSTAGRAM_URL', 'https://www.instagram.com/YOUR_INSTAGRAM_USERNAME'),
    
    // Enable or disable social media links
    'enabled' => [
        'facebook' => env('SOCIAL_FACEBOOK_ENABLED', true),
        'instagram' => env('SOCIAL_INSTAGRAM_ENABLED', true),
    ],
];

