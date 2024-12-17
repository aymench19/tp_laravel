<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
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
Route::group(['middleware' => ['auth']], function () {
Route::get('/etudiant',[EtudiantController::class,"index"])->name('etudiant');

Route::get('/create',[EtudiantController::class,"create"])->name('etudiant.create');
Route::post('/create',[EtudiantController::class,"store"])->name('etudiant.ajouter');

Route::put('/etudiant/{etudiant}',[EtudiantController::class,"update"])->name('etudiant.update');
Route::get('/etudiant/{etudiant}',[EtudiantController::class,"edit"])->name('etudiant.edit');

Route::get('/show/{etudiant}',[EtudiantController::class,"show"])->name('etudiant.show');
Route::delete('/delete/{etudiant}',[EtudiantController::class,"delete"])->name('etudiant.delete');});