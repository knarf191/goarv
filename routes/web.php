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
    return view('pages.proyectos');
})->name('goarv.projects');

Route::get('company', function() {
    return view('pages.empresa');
})->name('goarv.company');

Route::get('contact', function() {
    return view('pages.contacto');
})->name('goarv.contact');

Route::get('team', function() {
    return view('pages.equipo');
})->name('goarv.team');

Route::get('services', function() {
    return view('pages.services');
})->name('goarv.services');
