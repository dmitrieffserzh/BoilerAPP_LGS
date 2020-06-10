<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'MainController@index')->name('main');



















/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'namespace'  => 'Admin',
    'prefix'     => 'admin'], function() {
    Route::get(  '/',                                 [ 'as' => 'admin.main',                     'uses' => 'MainController@index'             ]);

    // POSTS
    Route::get(  '/posts',                            [ 'as' => 'admin.posts.index',                   'uses' => 'PostController@index'             ]);
    Route::get(  '/posts/create',                     [ 'as' => 'admin.posts.create',                  'uses' => 'PostController@create'            ]);
    Route::post( '/posts/store',                      [ 'as' => 'admin.posts.store',                   'uses' => 'PostController@store'             ]);
    Route::get(  '/posts/{id}/edit',                  [ 'as' => 'admin.posts.edit',                    'uses' => 'PostController@edit'              ]);
    Route::patch('/posts/{id}/update',                [ 'as' => 'admin.posts.update',                  'uses' => 'PostController@update'            ]);
    Route::get(  '/posts/{id}/delete',                [ 'as' => 'admin.posts.delete',                  'uses' => 'PostController@delete'             ]);
    Route::get(  '/posts/categories',                 [ 'as' => 'admin.posts.category',                'uses' => 'TaxonomyController@index'        ]);
    Route::get(  '/posts/categories/create',          [ 'as' => 'admin.posts.category.create',         'uses' => 'TaxonomyController@create'  ]);
    Route::post( '/posts/categories/store',           [ 'as' => 'admin.posts.category.store',          'uses' => 'TaxonomyController@store'   ]);
    Route::get(  '/posts/categories/{id}/edit',       [ 'as' => 'admin.posts.category.edit',           'uses' => 'TaxonomyController@edit'    ]);
    Route::patch('/posts/categories/{id}/update',     [ 'as' => 'admin.posts.category.update',         'uses' => 'TaxonomyController@update'  ]);
    Route::get(  '/posts/categories/{id}/delete',     [ 'as' => 'admin.posts.category.delete',         'uses' => 'TaxonomyController@delete'  ]);

    // NEWS
    Route::get(  '/news',                             [ 'as' => 'admin.news.index',                    'uses' => 'NewsController@index'             ]);
    Route::get(  '/news/create',                      [ 'as' => 'admin.news.create',                   'uses' => 'NewsController@create'            ]);
    Route::post( '/news/store',                       [ 'as' => 'admin.news.store',                    'uses' => 'NewsController@store'             ]);
    Route::get(  '/news/{id}/edit',                   [ 'as' => 'admin.news.edit',                     'uses' => 'NewsController@edit'              ]);
    Route::patch('/news/{id}/update',                 [ 'as' => 'admin.news.update',                   'uses' => 'NewsController@update'            ]);
    Route::get(  '/news/{id}/delete',                 [ 'as' => 'admin.news.delete',                   'uses' => 'NewsController@delete'             ]);
    Route::get(  '/news/categories',                  [ 'as' => 'admin.news.category',                 'uses' => 'TaxonomyController@index'        ]);
    Route::get(  '/news/categories/create',           [ 'as' => 'admin.news.category.create',          'uses' => 'TaxonomyController@create'  ]);
    Route::post( '/news/categories/store',            [ 'as' => 'admin.news.category.store',           'uses' => 'TaxonomyController@store'   ]);
    Route::get(  '/news/categories/{id}/edit',        [ 'as' => 'admin.news.category.edit',            'uses' => 'TaxonomyController@edit'    ]);
    Route::patch('/news/categories/{id}/update',      [ 'as' => 'admin.news.category.update',          'uses' => 'TaxonomyController@update'  ]);
    Route::get(  '/news/categories/{id}/delete',      [ 'as' => 'admin.news.category.delete',          'uses' => 'TaxonomyController@delete'  ]);
});
