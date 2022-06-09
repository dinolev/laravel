<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentsController;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//ovo je klasicno kak dela
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
// });


//ovo je kak da odabere koji su dostupni turniri
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\TournamentsController@index')->name('dashboard');
});

//za natjecatelje da vide svoj profil
Route::group(['middleware' => ['auth', 'role:natjecatelji']], function () {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard/addNewTournament', 'App\Http\Controllers\TournamentsController@addNewTournament')->name('dashboard.addNewTournament');
});

Route::resource('/tournaments', TournamentsController::class);

require __DIR__.'/auth.php';