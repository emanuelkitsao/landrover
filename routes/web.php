<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DropdownController;

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

Route::get('/redirect',[HomeController::class, 'redirect'] );
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/directorate', [HomeController::class, 'directorate']);
Route::get('/blogs', [BlogController::class, 'blogs']);
Route::get('/diary', [HomeController::class, 'diary']);
Route::get('/history', [HomeController::class, 'history']);
Route::get('/position', [HomeController::class, 'position']);
Route::get('/new_member', [HomeController::class, 'new_member']);
Route::get('/members_list', [HomeController::class, 'members_list']);
Route::get('get-states', [HomeController::class, 'getStates'])->name('getStates');
Route::get('get-cities', [HomeController::class, 'getCities'])->name('getCities');
Route::post('getData', [HomeController::class, 'getData']);
Route::get('/update_minister/{id}', [HomeController::class, 'update_minister']);
Route::post('/update_minister_confirm/{id}', [HomeController::class, 'update_minister_confirm']);
Route::get('/credo', [HomeController::class, 'credo']);
Route::get('/cadi/{id}', [HomeController::class, 'cadi']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
