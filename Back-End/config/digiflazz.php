<?php

return [
  'base_url' => env('DIGI_BASEURL'),
  'username' => env('DIGI_USERNAME'),
  'api_key' => env('DIGI_API_DEV'),
  'api_key_prod' => env('DIGI_API_PROD') ?? '',
];