<?php

use App\Http\Controllers\StatusController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;

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
    return redirect('tasks');
});


Route::controller(TugasController::class)->prefix('tasks')->group(function(){
    Route::get('', 'index')->name('tasks.index');
    Route::get('tambah', 'create')->name('tasks.create');
    Route::post('simpan', 'store')->name('tasks.store');
    Route::get('{id}', 'show')->name('tasks.show');
    Route::get('edit/{id}','edit')->name('tasks.edit');
    Route::post('edit/{id}','update')->name('tasks.update');
    Route::get('{id}/{status}', 'editstatus')->name('tasks.editstatus');
    Route::post('{id}/{status}', 'changestatus')->name('tasks.changestatus');
    Route::get('hapus/{id}', 'destroy')->name('tasks.destroy');
});


Route::get('/completed', [StatusController::class, 'showcompleted'])->name('tasks.showcompleted');
Route::get('/uncompleted', [StatusController::class, 'showincompleted'])->name('tasks.showincompleted');