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

// Route::get('/', function () {
//     return view('cvbuilder');
// });

Route::get('/', 'App\Http\Controllers\CVBuilderController@index');
Route::get('resume/data', 'App\Http\Controllers\CVBuilderController@data');

Route::post('resume/skills/create', 'App\Http\Controllers\CVBuilderController@addSkill');


