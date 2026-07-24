<?php
use App\Http\Controllers\StatisticController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index1');
// })->name('home');

// Route::get('/accueil', function () {
//     return view('index');
// })->name('accueil');

// Route::get('/accueil1', function () {
//     return view('index1');
// })->name('accueil1');

// *******======*************
Route::get('/dashboard/performances', [StatisticController::class, 'dashboard'])
    ->name('dashboard.performances');

Route::get('/', [StatisticController::class, 'visit'])->name('home');

Route::get('/track/whatsapp', [StatisticController::class, 'whatsapp'])->name('track.whatsapp');

Route::get('/track/standard', [StatisticController::class, 'standard'])->name('track.standard');

Route::get('/track/vip', [StatisticController::class, 'vip'])->name('track.vip');

Route::get('/track/vvip', [StatisticController::class, 'vvip'])->name('track.vvip');
