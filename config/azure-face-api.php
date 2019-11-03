<?php
return [
    /*
     * The API Key
     */
    'key' => config('azure-face-api.key', ''),

    /*
     * The API region - default (eastus)
     */
    'region' => config('azure-face-api.region', 'eastus')
];