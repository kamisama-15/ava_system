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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@main');

Route::get('/dashboard', 'DashboardController@main');
// Route::get('/home', 'UserController@main');

//fullcalender
Route::get('fullcalendar','FullCalendarController@index');
Route::post('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');


Route::group(['prefix' => '/'], function () {
    Route::get('/GradeOne', 'ElementaryController@gradeOne');
    Route::get('/AddGradeOne', 'ElementaryController@addGradeOne');
    Route::post('/InsertGradeOneStudent', 'ElementaryController@insertGradeOneStudent');
    Route::get('/DeleteGradeOne/{gr_one_student_id}', 'ElementaryController@deleteGradeOne');
    Route::get('/EditGradeOne/{gr_one_student_id}', 'ElementaryController@editGradeOne');
    Route::post('/UpdateGradeOneStudent', 'ElementaryController@updateGradeOneStudent');
    Route::get('/ViewGradeOne/{gr_one_student_id}', 'ElementaryController@viewGradeOne');
    Route::post('/ViewUpdateGradeOne', 'ElementaryController@viewUpdateGradeOne');
    Route::post('/GradeOneAddFamily', 'ElementaryController@gradeOneAddFamily');


    Route::get('GradeTwo', 'ElementaryController@gradeTwo');
    Route::get('/AddGradeTwo', 'ElementaryController@addGradeTwo');
    Route::post('/InsertGradeTwoStudent', 'ElementaryController@insertGradeTwoStudent');
    Route::get('/DeleteGradeTwo/{gr_two_student_id}', 'ElementaryController@deleteGradeTwo');
    Route::get('/EditGradeTwo/{gr_two_student_id}', 'ElementaryController@editGradeTwo');
    Route::post('/UpdateGradeTwoStudent', 'ElementaryController@updateGradeTwoStudent');
    Route::get('/ViewGradeTwo/{gr_two_student_id}', 'ElementaryController@viewGradeTwo');
    Route::post('/ViewUpdateGradeTwo', 'ElementaryController@viewUpdateGradeTwo');
    Route::post('/GradeTwoAddFamily', 'ElementaryController@gradeTwoAddFamily');

    Route::get('GradeThree', 'ElementaryController@gradeThree');
    Route::get('/AddGradeThree', 'ElementaryController@addGradeThree');
    Route::post('/InsertGradeThreeStudent', 'ElementaryController@insertGradeThreeStudent');
    Route::get('/DeleteGradeThree/{gr_three_student_id}', 'ElementaryController@deleteGradeThree');
    Route::get('/EditGradeThree/{gr_three_student_id}', 'ElementaryController@editGradeThree');
    Route::post('/UpdateGradeThreeStudent', 'ElementaryController@updateGradeThreeStudent');
    Route::get('/ViewGradeThree/{gr_three_student_id}', 'ElementaryController@viewGradeThree');
    Route::post('/ViewUpdateGradeThree', 'ElementaryController@viewUpdateGradeThree');
    Route::post('/GradeThreeAddFamily', 'ElementaryController@gradeThreeAddFamily');


    Route::get('/GradeFour', 'ElementaryController@gradeFour');
    Route::get('/AddGradeFour', 'ElementaryController@addGradeFour');
    Route::post('/InsertGradeFourStudent', 'ElementaryController@insertGradeFourStudent');
    Route::get('/DeleteGradeFour/{gr_four_student_id}', 'ElementaryController@deleteGradeFour');
    Route::get('/EditGradeFour/{gr_four_student_id}', 'ElementaryController@editGradeFour');
    Route::post('/UpdateGradeFourStudent', 'ElementaryController@updateGradeFourStudent');
    Route::get('/ViewGradeFour/{gr_four_student_id}', 'ElementaryController@viewGradeFour');
    Route::post('/ViewUpdateGradeFour', 'ElementaryController@viewUpdateGradeFour');
    Route::post('/GradeFourAddFamily', 'ElementaryController@gradeFourAddFamily');

    Route::get('GradeFive', 'ElementaryController@gradeFive');
    Route::get('/AddGradeFive', 'ElementaryController@addGradeFive');
    Route::post('/InsertGradeFiveStudent', 'ElementaryController@insertGradeFiveStudent');
    Route::get('/DeleteGradeFive/{gr_five_student_id}', 'ElementaryController@deleteGradeFive');
    Route::get('/EditGradeFive/{gr_five_student_id}', 'ElementaryController@editGradeFive');
    Route::post('/UpdateGradeFiveStudent', 'ElementaryController@updateGradeFiveStudent');
    Route::get('/ViewGradeFive/{gr_five_student_id}', 'ElementaryController@viewGradeFive');
    // Route::post('/ViewUpdateGradeFive', 'ElementaryController@viewUpdateGradeFive');
    Route::post('/ViewUpdateGradeFive', 'ElementaryController@viewUpdateGradefive');
    Route::post('/GradeFiveAddFamily', 'ElementaryController@gradeFiveAddFamily');
   

    Route::get('/GradeSix', 'ElementaryController@gradeSix');
    Route::get('/AddGradeSix', 'ElementaryController@addGradeSix');
    Route::post('/InsertGradeSixStudent', 'ElementaryController@insertGradeSixStudent');
    Route::get('/DeleteGradeSix/{gr_six_student_id}', 'ElementaryController@deleteGradeSix');
    Route::get('/EditGradeSix/{gr_six_student_id}', 'ElementaryController@editGradeSix');
    Route::post('/UpdateGradeSixStudent', 'ElementaryController@updateGradeSixStudent');
    Route::get('/ViewGradeSix/{gr_six_student_id}', 'ElementaryController@viewGradeSix');
    Route::post('/ViewUpdateGradeSix', 'ElementaryController@viewUpdateGradeSix');
    Route::post('/GradeSixAddFamily', 'ElementaryController@gradeSixAddFamily');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/view_announcements', 'AnnouncementController@view_announcements');

});

Route::post('/post', 'PostController@post');
