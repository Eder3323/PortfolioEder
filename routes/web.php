<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pricipal\Home as Home;
use App\Livewire\Principal\HomeDos as HomeDos;

//Route::get('/', function () {
//    return Home::class;
//});
Route::get('/', HomeDos::class)
    ->name('Home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
