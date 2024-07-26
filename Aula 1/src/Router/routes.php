<?php

$routes = [
    'GET'=>[
        '/users' => 'UserController@List',
        '/create/user' => 'UserController@showCreateForm',
    ],
    'POST' => [
        '/create/user' => 'UserController@storeUser',
    ]
];
