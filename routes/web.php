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
    return view('welcome');
});


Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin.home');
Route::get('/member', 'MemberController@index')->name('member.home');
Route::get('/manager', 'ManagerController@index')->name('manager.home');

//SEARCH JOB
Route::get('/search_job', 'SearchController@search_job')->name('search.job');

Route::resource('memberProfiles', 'MemberProfileController');
Route::resource('jobPositions', 'JobPositionController');

Route::resource('companies', 'companyController');