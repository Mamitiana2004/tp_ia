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

use App\Http\Controllers;
use App\Http\Controllers\home;

Route::get("about", "App\Http\Controllers\home@about")->name('about');

// Route::get("/", "home@index1")->name('home');
// Route::get('/',[home::class , 'index1']);

Route::post("massage", "App\Http\Controllers\home@message")->name('message');

// Admin Login ........................?


Route::get("Admin/Login/Page", "App\Http\Controllers\home@adminloginpage")->name('adminloginpage');
Route::post("admin_beshbord", "App\Http\Controllers\home@admin_beshbord")->name('admin_beshbord');
Route::get("adminlogout", "App\Http\Controllers\home@adminlogout")->name('adminlogout');


Route::get("/", "App\Http\Controllers\DefaultController@index")->name('home');
Route::get("/publication/{id}", "App\Http\Controllers\DefaultController@publication")->name('publication');
Route::get("about", "App\Http\Controllers\TestController@template")->name('about');
Route::get("contact", "App\Http\Controllers\TestController@template")->name('contact');

Route::get("adm", "App\Http\Controllers\PublicationController@list")->name('admin');
Route::get("admin/publications/ajouter", "App\Http\Controllers\PublicationController@add")->name('publication_new_form');
Route::post("admin/publications/ajouter", "App\Http\Controllers\PublicationController@insert")->name('publication_insert');
Route::get("admin/publications", "App\Http\Controllers\PublicationController@list")->name('publications_list');
Route::get("admin/publications/edit/{id}", "App\Http\Controllers\PublicationController@edit")->name('publication_edit');
Route::post("admin/publications/update/{id}", "App\Http\Controllers\PublicationController@update")->name('publication_update');
Route::get("admin/publications/delete/{id}", "App\Http\Controllers\PublicationController@delete")->name('publication_delete');
