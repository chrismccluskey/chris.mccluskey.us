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
    $title = 'Portfolio of ';
    $projects = Project::orderBy('category_id', 'asc')->get();
    $project_categories = ProjectCategory::orderBy('title', 'asc')->get();
    return view('portfolio',[
        'section' => $section,
        'title' => $title,
        'projects' => $projects,
        'project_categories' => $project_categories,
    ]);
});

Route::get('/resume', function () {
    $section = 'resume';
    $title = 'R&eacute;sum&eacute; of ';
    return view('resume', [
        'section' => $section,
        'title' => $title,
    ]);
});

Route::get('/about', function () {
    $section = 'about';
    $title = 'About ';
    return view('about', [
        'section' => $section,
        'title' => $title,
    ]);
});

Route::get('/contact', function () {
    $section = 'contact';
    $title = 'Contact ';
    return view('contact', [
        'section' => $section,
        'title' => $title,
    ]);
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
    $section = '';
    $title = 'Message Sent to ';
    return view('message-sent', [
        'section' => $section,
        'title' => $title,
    ]);
});

Route::get('/about/this-site', function () {
    $section = '';
    $title = 'About This Site: ';
    return view('credits', [
        'section' => $section,
        'title' => $title,
    ]);
});

