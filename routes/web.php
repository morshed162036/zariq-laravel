<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/service/service-details', function () {
    return view('service-details');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/portfolio/portfolio-details', function () {
    return view('portfolio-details');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/team/team-details', function () {
    return view('team-details');
});
Route::get('/casestudy/casestudy-details', function () {
    return view('casestudy-details');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog/blog-details', function () {
    return view('blog-details');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/job-circular', function () {
    return view('job-circular');
});
Route::get('/join-us', function () {
    return view('join-us');
});