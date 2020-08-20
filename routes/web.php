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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('layouts.app');
});


Route::resource('projects', 'ProjectsController');
Route::resource('events', 'EventsController');
Route::resource('videos', 'VideosController');
Route::resource('inicio', 'InicioController');
Route::resource('mission', 'MissionController');
Route::resource('semblanza', 'SemblanzaController');
Route::resource('members', 'MembersController');
Route::resource('adminPanel', 'AdminPanelController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
