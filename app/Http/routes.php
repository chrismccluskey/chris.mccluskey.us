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
use App\Message;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
});

Route::get('/portfolio', function () {
    $section = 'portfolio';
    $projects = Project::orderBy('category_id', 'asc')->get();
    $project_categories = ProjectCategory::orderBy('title', 'asc')->get();
    return view('portfolio',[
        'section' => $section,
        'projects' => $projects,
        'project_categories' => $project_categories,
    ]);
});

Route::get('/resume', function () {
    $section = 'resume';
    return view('resume', ['section' => $section]);
});

Route::get('/about', function () {
    $section = 'about';
    return view('about', ['section' => $section]);
});

Route::get('/contact', function () {
    $section = 'contact';
    return view('contact', ['section' => $section]);
});

Route::post('/contact/send-message', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'email' => 'required|max:255|email',
        'message' => 'max:60000'
    ]);

    if ($validator->fails()) {
        return redirect('/contact')
            ->withInput()
            ->withErrors($validator);
    }

    $message = new Message;
    $message->name = $request->name;
    $message->email = $request->email;
    $message->message = $request->message;
    $message->ip_address = $request->server('REMOTE_ADDR');
    $message->user_agent = $request->server('HTTP_USER_AGENT');
    $message->save();

    return redirect('/contact/message-sent');
});

Route::get('/contact/message-sent', function () {
    return view('message-sent', ['section' => $section]);
});

Route::get('/about/this-site', function () {
    return view('credits', ['section' => $section]);
});

