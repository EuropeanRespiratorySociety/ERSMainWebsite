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
    'deploymentUrl' => 'https://5a0b7ae6-4372-406a-a293-88d22608dbc3-hosted.cloudcms.net/',
    'repositoryId'  => '126d630737b199cfa4e7',
    'branch'        => 'master'

   
);
