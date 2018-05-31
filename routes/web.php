<?php

//mastering starts
Route::get('/',[
    'uses' => 'GroceryShopController@index',
    'as'   => '/'
]);

Route::get('about/us',[
    'uses' => 'GroceryShopController@aboutUs',
    'as'   => 'about-us'
]);

Route::get('kitchen/content',[
    'uses' => 'GroceryShopController@kitchenContent',
    'as'   => 'kitchen-content'
]);

Route::get('household/content',[
    'uses' => 'GroceryShopController@householdContent',
    'as'   => 'household-content'
]);

Route::get('contact/us',[
    'uses' => 'GroceryShopController@contact',
    'as'   => 'contact'
]);
//mastering ends

Auth::routes();

Route::get('/dashboard',[
    'uses' => 'HomeController@index',
    'as'   => 'dashboard'
]);


