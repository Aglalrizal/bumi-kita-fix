<?php

use App\Models\Kota;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCampaignController;

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
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// Route::get('/about', function () {
//     return view('about', [
//         'title' => 'About',
//         "name" => "Rizal Aglal Faozi",
//         "email" => "aglalrizal@upi.edu",
//         "image" => "pp.png"
//     ]);
// });

Route::get('/signup', [SignUpController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignUpController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/campaigns', [CampaignController::class, 'index']);
Route::get('/lokasi', [LokasiController::class, 'index']);
Route::get('/lokasi/{provinsi:slug}', [LokasiController::class, 'provinsi']);
//sigle post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('campaigns/{campaign:slug}', [CampaignController::class, 'show'])->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('dashboard/campaigns', DashboardCampaignController::class)->middleware('auth');
Route::post('/volunteer', [VolunteerController::class, 'store'])->middleware('auth');
Route::get('/selectProvinsi', [SelectController::class, 'provinsi']);
Route::get('/selectKota/{id}', [SelectController::class, 'kota']);
