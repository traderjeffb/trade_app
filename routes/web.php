<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionsController;
use resources\routes\web;

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
    return view('main');
});

Route::get('transactions', [TransactionsController::class,'index' ])->name('transactions');
Route::get('create', [TransactionsController::class,'create' ])->name('create');
Route::post('store', [TransactionsController::class,'store' ])->name('store');
Route::get('edit/transaction/{transaction_id}', [TransactionsController::class,'edit' ])->name('edit');
Route::post('update/transaction/{transaction_id}', [TransactionsController::class,'update'])->name('update');
Route::get('delete/transaction/{transaction_id}', [TransactionsController::class,'delete' ])->name('delete');
Route::get('details/transaction/{transaction_id}', [TransactionsController::class,'details' ])->name('details');

//Route::get('update/tranasaction/{transaction_id}','TransactionsController@Update')->name('update');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
