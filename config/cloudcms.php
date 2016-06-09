<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API Keys
    |--------------------------------------------------------------------------
    |
    | Get this from the Cloud CMS Developers API keys menu item (per project)  
    |
    */
    'username' => env('CC_USERNAME', ''),
    'password' => env('CC_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API base URL 
    |--------------------------------------------------------------------------
    |
    | The base url of Cloud CMS API  (urlResourceOwnerDetails)
    |
    */
    'baseUrl'  => 'https://api.cloudcms.com',

    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API Keys
    |--------------------------------------------------------------------------
    |
    | Get this from the Cloud CMS Developers API keys menu item (per project) 
    |
    */

    'clientKey'     => env('CC_CLIENT_KEY', ''),
    'clientSecret'  => env('CC_CLIENT_SECRET', ''),
    'redirectUri'   => 'http://www.ersnet.org/',
    'deploymentUrl' => 'https://53ed64a9-671f-4e65-9f57-5e736e3d5d62-hosted.cloudcms.net',
    'repositoryId'  => '607e97e4474d46e40345',
    'branch'        => 'master'

   
);
