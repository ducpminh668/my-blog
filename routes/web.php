<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'FrontendController@index',
    'as' => 'home'
]);

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index');

    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);
    Route::post('/post/store', [
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);
    Route::get('/posts', [
        'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);
    Route::get('/posts/trashed', [
        'uses' => 'PostsController@trashed',
        'as' => 'posts.trashed'
    ]);
    Route::get('/post/delete/{id}', [
        'uses' => 'PostsController@destroy',
        'as' => 'post.delete'
    ]);
    Route::get('/post/kill/{id}', [
        'uses' => 'PostsController@kill',
        'as' => 'post.kill'
    ]);
    Route::get('/post/restore/{id}', [
        'uses' => 'PostsController@restore',
        'as' => 'post.restore'
    ]);
    Route::get('/post/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
    ]);
    Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
    ]);

    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);
    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);
    Route::get('/category/index', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);
    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);
    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);
    Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.destroy'
    ]);

    Route::get('/tags', [
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);
    Route::get('/tag/create', [
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
    Route::post('/tag/store', [
        'uses' => 'TagsController@store',
        'as' => 'tags.store'
    ]);
    Route::get('/tags/edit/{id}', [
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    Route::post('/tags/update/{id}', [
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
    Route::get('/tags/delete/{id}', [
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);

    Route::get('users', [
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);
    Route::get('users/create', [
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);
    Route::post('users/store', [
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    Route::get('users/toggleAdmin/{id}', [
        'uses' => 'UsersController@toogleAdmin',
        'as' => 'user.toogleAdmin'
    ])->middleware('admin');
    Route::get('user/profile', [
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);
    Route::post('user/profile/update', [
        'uses' => 'ProfilesController@update',
        'as' => 'user.update'
    ]);

    Route::get('settings/', [
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ]);
    Route::post('settings/update', [
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ]);
});

Route::get('post/{slug}', [
    'uses' => 'FrontEndController@singlePost',
    'as' => 'post.single'
]);