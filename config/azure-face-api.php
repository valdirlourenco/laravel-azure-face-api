<?php
return [
    /*
     * The API Key
     */
    'key' => env('AZURE_FACE_API_KEY', ''),

    /*
     * The API region - default (eastus)
     */
    'region' => config('AZURE_FACE_API_REGION', 'eastus')
];