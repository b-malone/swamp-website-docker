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

// Route::get('/', function () {
//     return view('landing');
// });

// Route::get('/', function() {
//   return View::make('pages.main');
// });
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

// Route::get('/events', [
//     'as' => 'calendar',
//     'uses' => 'PagesController@calendar'
// ]);
