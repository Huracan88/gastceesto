<?php

use App\Exports\GuestsExport;
use Illuminate\Support\Facades\Route;

use App\Livewire\GuestPage;
use App\Livewire\StatsPage;
use Maatwebsite\Excel\Facades\Excel;


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
    return redirect('guests');
});

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('guests', GuestPage::class)
    ->middleware(['auth'])
    ->name('guests');

Route::get('stats', StatsPage::class)
    ->middleware(['auth'])
    ->name('stats');

Route::get('download-report', function(){
    return Excel::download(new GuestsExport, 'invitados.xlsx');
    })
    ->middleware(['auth'])
    ->name('download-report');

require __DIR__.'/auth.php';
