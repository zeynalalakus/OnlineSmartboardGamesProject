<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminPanel', [\App\Http\Controllers\UserController::class, 'adminPanel'])->name('adminPanel');


Route::get('/userList', [\App\Http\Controllers\UserController::class, 'userList'])->name('userList');
Route::get('/userManagement', [\App\Http\Controllers\UserController::class, 'userManagement'])->name('userManagement');
Route::get('/deletedUsers', [\App\Http\Controllers\UserController::class, 'deletedUsers'])->name('deletedUsers');
Route::get('/updateUserView/{id}', [\App\Http\Controllers\UserController::class, 'updateUserView'])->name('updateUserView');
Route::post('/updateUser/{id}', [\App\Http\Controllers\UserController::class, 'updateUser'])->name('updateUser');
Route::get('/deleteUser/{id}', [\App\Http\Controllers\UserController::class, 'deleteUser'])->name('deleteUser');
Route::get('/undeleteUser/{id}', [\App\Http\Controllers\UserController::class, 'undeleteUser'])->name('undeleteUser');
Route::get('/hardDeleteUser/{id}', [\App\Http\Controllers\UserController::class, 'hardDeleteUser'])->name('hardDeleteUser');
Route::get('/addUserView', [\App\Http\Controllers\UserController::class, 'addUserView'])->name('addUserView');
Route::post('/addUser', [\App\Http\Controllers\UserController::class, 'addUser'])->name('addUser');

Route::get('/dataSetsList', [\App\Http\Controllers\DataSetController::class, 'dataSetsList'])->name('dataSetsList');
Route::get('/deletedDataSets', [\App\Http\Controllers\DataSetController::class, 'deletedDataSets'])->name('deletedDataSets');
Route::get('/undeleteSet/{id}', [\App\Http\Controllers\DataSetController::class, 'undeleteSet'])->name('undeleteSet');
Route::get('/hardDeleteSet/{id}', [\App\Http\Controllers\DataSetController::class, 'hardDeleteSet'])->name('hardDeleteSet');
Route::get('/deleteDataSet/{id}', [\App\Http\Controllers\DataSetController::class, 'deleteDataSet'])->name('deleteDataSet');


Route::get('/jeopardGameView/{name}', [\App\Http\Controllers\GameController::class, 'jeopardyGameView'])->name('jeopardyGameView');
Route::get('/multiplayerGameView/{name}', [\App\Http\Controllers\GameController::class, 'multiplayerGameView'])->name('multiplayerGameView');
Route::get('/matchingGameView/{name}', [\App\Http\Controllers\GameController::class, 'matchingGameView'])->name('matchingGameView');
Route::get('/createSetView', [\App\Http\Controllers\GameController::class, 'createSetView'])->name('createSetView');
Route::post('/createSet', [\App\Http\Controllers\GameController::class, 'createSet'])->name('createSet');
Route::get('/deleteSet/{id}', [\App\Http\Controllers\GameController::class, 'deleteSet'])->name('deleteSet');
Route::get('/updateSetView/{name}', [\App\Http\Controllers\GameController::class, 'updateSetView'])->name('updateSetView');
Route::post('/updateSet/{name}', [\App\Http\Controllers\GameController::class, 'updateSet'])->name('updateSet');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/games', [\App\Http\Controllers\GameController::class, 'games'])->name('games');
Route::get('/allSets', [\App\Http\Controllers\GameController::class, 'allSets'])->name('allSets');
