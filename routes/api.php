<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
Route::post('login', [AuthController::class, 'login']);
Route::prefix('kandidat')->group(function () {
    // Mengambil semua data kandidat
    Route::get('/', 'KandidatController@index');

    // Menambahkan data kandidat baru
    Route::post('/', 'KandidatController@store');

    // Mengambil data kandidat berdasarkan ID
    Route::get('/{id}', 'KandidatController@show');

    // Mengupdate data kandidat berdasarkan ID
    Route::put('/{id}', 'KandidatController@update');

    // Menghapus data kandidat berdasarkan ID
    Route::delete('/{id}', 'KandidatController@destroy');
});

});
