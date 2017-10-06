<?php

use Illuminate\Routing\Router;

$router->group(['prefix' =>'contact'], function (Router $router) {
    $router->get('send', [
        'as' => 'contact.send',
        'uses' => 'PublicController@send',
        //'middleware' => 'can:contact.contacts.index'
    ]);   

    $router->post('send/ajax', [
        'as' => 'contact.send.ajax',
        'uses' => 'PublicController@sendAjax',
        //'middleware' => 'can:contact.contacts.index'
    ]);


});