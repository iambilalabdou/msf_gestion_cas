<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TypeCasController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\BlacklistController;
use App\Http\Controllers\OrphelinController;
use Illuminate\Support\Testing\Fakes\Fake;

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
    return view('welcome');
});


Route::resource('typesCas', TypeCasController::class);

Route::resource('familles', FamilleController::class);
Route::get('/familles/{famille}/add-to-blacklist', [FamilleController::class, 'addToBlacklist'])->name('familles.addToBlacklist');

Route::resource('blacklist', BlacklistController::class);

Route::resource('orphelins', OrphelinController::class);