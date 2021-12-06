<?php

return [
    'client_id' => env('PLAID_CLIENT_ID', ''),
    'secret' => env('PLAID_SECRET', ''),
    'public_key' => env('PLAID_PUBLIC_KEY', ''),
    'environment' => env('PLAID_ENVIRONMENT', 'sandbox'),
];
