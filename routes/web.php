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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',['uses'=>'IndexController@index','us'=>'index']);

Route::group(['prefix'=>'admin'],function (){


    /*General Route*/
    Route::get('/dashboard','Dashboard\DashboardController@dashboard')->name('Dashboard')->middleware('auth');
    Route::get('/blog','Dashboard\DashboardController@blog')->name('Blog')->middleware('auth');
    Route::get('/blog/new/post','Dashboard\DashboardController@add_new_post')->name('add new post')->middleware('auth');
    Route::get('/blog/tags','Dashboard\DashboardController@tags')->name('Tags')->middleware('auth');

    /*Post Route*/
    Route::get('/blog/view/post/{path}','Dashboard\DashboardController@view_post')->name('Single Post')->middleware('auth');
    Route::get('/blog/edit/post/{path}','Dashboard\DashboardController@edit_post')->name('Post edit')->middleware('auth');
    Route::post('/blog/add/post','Dashboard\DashboardController@add_post_worker')->name('add_post')->middleware('auth');

    /*Tag Route*/
    Route::post('/blog/tags/get','Dashboard\DashboardController@get_tags_worker')->name('get_tags')->middleware('auth');
    Route::post('/blog/tags/edit','Dashboard\DashboardController@edit_tags_worker')->name('edit_tags')->middleware('auth');
    Route::post('/blog/tags/add','Dashboard\DashboardController@add_tags_worker')->name('add_tags')->middleware('auth');
    Route::post('/blog/tags/delete','Dashboard\DashboardController@delete_tags_worker')->name('delete_tags')->middleware('auth');



});

Route::get('/back',function (){
    return back();

})->name('back');