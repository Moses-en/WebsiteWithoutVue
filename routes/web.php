<?php

use App\Models\Skill;
use App\Models\Project;
use App\Models\Stat;
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

Route::get('/', function () {
    return view('HomePage');
});

Route::get('/Skills', function () {
    return view('skills', [
        'skills' => Skill::all(),
        'stats' => Stat::all(),
    ]);
});

Route::get('/Projects', function () {
    return view('projects', [
        'projects' => Project::all()
    ]);
});

Route::get('/Contact', function () {
    return view('contact');
});
