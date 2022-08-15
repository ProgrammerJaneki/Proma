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
Route::view('/proma-messages', 'livewire/proma/messages/proma-messages')->name('proma-messages');
Route::view('/proma-settings', 'livewire/proma/settings/proma-settings')->name('proma-settings');
Route::view('/proma-signup', 'livewire/proma/register/proma-signup')->name('proma-signup');
Route::view('/proma-signin', 'livewire/proma/register/proma-signin')->name('proma-signin');
Route::view('/proma-tasks', 'livewire/proma/projects/tasks/proma-tasks')->name('proma-tasks');

// Route::get('/', function () {
//     return view('welcome');
// });
