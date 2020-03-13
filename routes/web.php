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

Route::group(['middleware' => 'guest'], function () {
    //User: Login

    Route::get('/', 'Auth\LoginController@showForm');
    Route::post('/', 'Auth\LoginController@login')->name('login');

});

Route::group(['middleware' => 'auth'], function () {

    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/home', 'HomeController@index')->name('home');


    

    Route::name('project')->prefix('project')->group(function(){
        Route::get('/','ProjectController@index');
        Route::post('/addProject','ProjectController@createProj')->name('addProject');
        Route::post('/addSprint','ProjectController@createSpri')->name('addSprint');
        Route::post('/addTask','ProjectController@createTask')->name('addTask');
    });
    
});

// Route::get('test','ProjectController@getTask');
// use App\Models\Project;
// Route::get('test/{projectName}',function($projectName){

//     $project = Project::create([
//         'projectName' => $projectName,
//         'created_by' => \Auth::user()->firstname.' '.\Auth::user()->lastname
//     ]);

//     dd($project);
// });

// use App\Models\User;
// Route::get('test',function(){
//     dd(User::all()->with('role')->get());
// });