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
    return view('pages.home');
})->name('goarv.home');

Route::get('projects', function() {
    return view('pages.projects');
})->name('goarv.projects');

Route::get('company', function() {
    return view('pages.company');
})->name('goarv.company');

Route::get('contact', function() {
    return view('pages.contact');
})->name('goarv.contact');

Route::get('team', function() {
    return view('pages.team');
})->name('goarv.team');

Route::get('services', function() {
    return view('pages.services');
})->name('goarv.services');

Route::get('clients', function() {
    return view('pages.clients');
})->name('goarv.clients');

/*=======================================
                DASHBOARD
/*======================================*/

Route::get('login2', function() {
    return view('pages.dashboard.login');
})->name('goarv.login')->middleware('auth');

Route::get('dashboard', function() {
    return view('pages.dashboard.dashboard', ['title'=>'Dashboard']);
})->name('goarv.dashboard')->middleware('auth');

Route::get('carousel', function() {
    return view('pages.dashboard.carousel', ['title'=>'Carousel']);
})->name('goarv.carousel')->middleware('auth');

Route::get('providers', function() {
    return view('pages.dashboard.providers', ['title'=>'Proveedores']);
})->name('goarv.providers')->middleware('auth');

Route::get('comments', function() {
    return view('pages.dashboard.comments', ['title'=>'Comentarios']);
})->name('goarv.comments')->middleware('auth');

Route::get('messages', function() {
    return view('pages.dashboard.messages', ['title'=>'Mensajes']);
})->name('goarv.messages')->middleware('auth');

Route::get('admin_projects', function() {
    return view('pages.dashboard.projects', ['title'=>'Proyectos']);
})->name('goarv.admin_projects')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
