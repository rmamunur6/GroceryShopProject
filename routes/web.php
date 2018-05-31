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

/*category */

Route::get('/category/add',[
    'uses'=>'CategoryController@index',
    'as'  =>'add-category'
]);

Route::get('/category/manage',[
    'uses'=>'CategoryController@manageCategory',
    'as'  =>'manage-category'
]);

Route::post('/category/save',[
    'uses'=>'CategoryController@saveCategory',
    'as'  =>'save-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses'=>'CategoryController@unpublishedCategory',
    'as'  =>'unpublished-category'
]);
Route::get('/category/published/{id}',[
    'uses'=>'CategoryController@publishedCategory',
    'as'  =>'published-category'
]);
Route::get('/category/edit/{id}',[
    'uses'=>'CategoryController@editCategory',
    'as'  =>'edit-category'
]);

Route::post('/category/update',[
    'uses'=>'CategoryController@updateCategory',
    'as'  =>'update-category'
]);

Route::get('/category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategory',
    'as'  =>'delete-category'
]);

//category ends


