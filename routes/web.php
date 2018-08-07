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


Route::get('/', 'WelcomeController@index')->name('welcome');


Route::get('/home', function () {
  return redirect('/');
});

Auth::routes();
//Register
Route::get('/worker_register', 'Auth\RegisterController@worker_register')->name('register.worker');
Route::get('/manager_register', 'Auth\RegisterController@manager_register')->name('register.manager');
Route::get('/manager_package', 'Auth\RegisterController@manager_package')->name('register.manager_package');

Route::get('/admin', 'AdminController@index')->name('admin.home');
Route::get('/member', 'MemberController@index')->name('member.home');

Route::get('/manager', 'ManagerController@index')->name('manager.home');
Route::get('/show_managers', 'ManagerController@show_managers')->name('manager.show');
Route::delete('/show_managers/{id}', 'ManagerController@destroy')->name('manager.destroy');

//SAVE RESUME
Route::post('/save_resume/{id}', 'ManagerController@save_resume')->name('manager.save_resume');

//SEARCH JOB
Route::get('/search_job', 'SearchController@search_job')->name('search.job');
Route::get('/search_worker', 'SearchController@search_worker')->name('search.worker');

Route::resource('memberProfiles', 'MemberProfileController');
Route::get('/job_stared', 'MemberProfileController@stared')->name('memberProfiles.stared');
Route::get('/job_registered', 'MemberProfileController@registered')->name('memberProfiles.registered');
Route::get('/my_resume', 'MemberProfileController@my_resume')->name('memberProfiles.my_resume');


Route::resource('jobPositions', 'JobPositionController');
//ACTION JOBs
Route::post('/register/{id}', 'JobPositionController@register')->name('jobPositions.register');
Route::post('/star/{id}', 'JobPositionController@star')->name('jobPositions.star');

Route::resource('companies', 'companyController');
Route::get('/show_resume', 'companyController@show_resume')->name('companies.show_resume');
Route::get('/show_registered', 'companyController@show_registered')->name('companies.show_registered');


Route::resource('announcements', 'announcementsController');
Route::get('/announcements_confirm/{id}', 'announcementsController@confirm')->name('announcements.confirm');

Route::resource('governmentJobs', 'government_jobsController');
Route::get('/governmentJobs_confirm/{id}', 'government_jobsController@confirm')->name('governmentJobs.confirm');


Route::resource('packages', 'packageController');

Route::resource('paymentNotifications', 'PaymentNotificationController');
Route::get('/paymentNotifications_markread/{id}', 'PaymentNotificationController@markread')->name('paymentNotifications.markread');

Route::resource('contactuses', 'ContactUsController');
Route::get('/contactuses_markread/{id}', 'ContactUsController@markread')->name('contactuses.markread');


Route::resource('images', 'ImageController');

Route::resource('appointments', 'AppointmentController');