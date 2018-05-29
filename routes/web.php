<?php

Route::get('/',[
    'uses' => 'GroceryShopController@index',
    'as'   => '/'
]);

Route::get('about-us',[
    'uses' => 'GroceryShopController@aboutUs',
    'as'   => 'about-us'
]);

Route::get('kitchen-content',[
    'uses' => 'GroceryShopController@kitchenContent',
    'as'   => 'kitchen-content'
]);

Route::get('household-content',[
    'uses' => 'GroceryShopController@householdContent',
    'as'   => 'household-content'
]);

Route::get('contact',[
    'uses' => 'GroceryShopController@contact',
    'as'   => 'contact'
]);


