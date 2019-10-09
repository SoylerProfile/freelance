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

// PROJECTS

Route::get('/projects', 'ProjectsController@index')
    ->name('projects')
    ->middleware('auth');

Route::get('/project/{id}.html', 'ProjectController@index')
    ->name('project')
    ->middleware('auth');

// MAILBOX

Route::get('/mailbox', 'MailboxController@index')
    ->name('mailbox')
    ->middleware('auth');

Route::get('chat/{user_id}/{user2_id}/{chat_id}', 'MailboxController@showChat')
    ->name('showChat')
    ->middleware('auth');

Route::get('/mailbox/read/thread/{chat_id}', 'MailboxController@chat')
    ->name('chat')
    ->middleware('auth');

Route::post('saveMessage', 'MailboxController@saveMessageToDB')
    ->name('saveMessage')
    ->middleware('auth');

Route::post('chooseExecutor', 'MailboxController@chooseExecutor')
    ->name('chooseExecutor')
    ->middleware('auth');

// PAGES

Route::get('employers', 'EmployersController@index')
    ->name('employers')
    ->middleware('auth');

// ETC

Route::post('addBid', 'BidController@addBid')
    ->name('addBid')
    ->middleware('auth');

Route::post('finishTheProject', 'BidController@finishTheProject')
    ->name('finishTheProject')
    ->middleware('auth');

Route::get('createProject', 'ProjectController@createProject')
    ->name('createProject')
    ->middleware('auth');

Route::post('createProjectSave', 'ProjectController@createProjectSave')
    ->name('createProjectSave')
    ->middleware('auth');