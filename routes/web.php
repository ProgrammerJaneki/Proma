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

Route::view('/', 'livewire/proma/dashboard/proma-dashboard')->name('proma-dashboard');
Route::view('/proma-projects', 'livewire/proma/projects/proma-projects')->name('proma-projects');
Route::view('/proma-teams', 'livewire/proma/teams/proma-teams')->name('proma-teams');

// Route::get('/', function () {
//     return view('welcome');
// });
