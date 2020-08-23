<?php

//LOGIN
$router->get('login', 'AuthController@login_form');
$router->post('login', 'AuthController@login');
$router->get('logout', 'AuthController@logout');

//PAGES
$router->get('', 'PagesController@home');

//ROOMS
$router->get('rooms', 'RoomsController@index');
$router->get('rooms/create', 'RoomsController@create');
$router->post('rooms/create', 'RoomsController@store');
$router->get('rooms/show', 'RoomsController@show');
$router->get('rooms/edit', 'RoomsController@edit');
$router->post('rooms/edit', 'RoomsController@update');
$router->get('rooms/destroy', 'RoomsController@destroy');

//USERS
$router->get('users', 'UsersController@index');
$router->get('users/create', 'UsersController@create');
$router->post('users', 'UsersController@store');
$router->get('users/show', 'UsersController@show');
$router->get('users/edit', 'UsersController@edit');
$router->post('users/edit', 'UsersController@update');
$router->get('users/editPassword', 'UsersController@editPassword');
$router->post('users/editPassword', 'UsersController@updatePassword');
$router->get('users/destroy', 'UsersController@destroy');


//API
$router->get('api/rooms', 'ApiRoomsController@index');