<?php

return [
    /*
    |--------------------------------------------------------------------------
    | License Configuration
    |--------------------------------------------------------------------------
    */

    // Default license duration in days
    'default_duration' => 365,

    // License key prefix
    'key_prefix' => env('LICENSE_KEY_PREFIX', 'FLX-'),

    // Enable license expiration notifications
    'enable_notifications' => true,

    // Days before expiration to send notification
    'notification_days' => [30, 15, 7, 1],
];