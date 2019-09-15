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

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/project/{id}.html', 'ProjectController@index')->name('project');

Route::get('/mailbox', 'MailboxController@index')->name('mailbox');
Route::get('/mailbox/{id}', 'MailboxController@createChat')->name('createChat');
Route::get('/mailbox/read/thread/{chat_id}', 'MailboxController@chat')->name('chat');