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

/* Pages */
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@index'
]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PagesController@about'
]);

Route::get('/blog', [
    'as' => 'blog',
    'uses' => 'PagesController@blog'
]);

Route::get('/resources', [
    'as' => 'resources',
    'uses' => 'PagesController@resources'
]);

Route::get('/events', [
    'as' => 'events',
    'uses' => 'PagesController@events'
]);

Route::get('/people', [
    'as' => 'people',
    'uses' => 'PagesController@people'
]);

/* Emails */
// Route::post('/send', 'EmailController@send');
Route::post('/email/message', 'EmailController@sendMessage');
Route::post('/email/volunteer', 'EmailController@sendVolunteerRequest');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
