<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

use App\Project;
use App\ProjectCategory;


Route::get('/', function () {
    return view('home');
});

Route::get('/portfolio', function () {

    $projects = Project::orderBy('category_id', 'asc')->get();
    $project_categories = ProjectCategory::orderBy('title', 'asc')->get();
    return view('portfolio',[
        'projects' => $projects,
        'project_categories' => $project_categories,
    ]);
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about/this-site', function () {
    return view('credits');
});

