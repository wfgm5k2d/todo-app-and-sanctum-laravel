<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('/auth/login');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/home', [TodoController::class, 'index'])->name('index');
    Route::get('/', [TodoController::class, 'index']);
    Route::get('create', [TodoController::class, 'create']);
    Route::get('details/{todo}', [TodoController::class, 'details']);
    Route::get('edit/{todo}', [TodoController::class, 'edit']);
    Route::get('delete/{todo}', [TodoController::class, 'delete']);
    Route::get('/user', function(Request $request) {
        return $request->user();
    });

    Route::post('update/{todo}', [TodoController::class, 'update']);
    Route::post('store-data', [TodoController::class, 'store']);
});
