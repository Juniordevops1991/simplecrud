<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

Route::get("/", [ViewController::class, "index"])->name('index');
Route::get("viewadd", [ViewController::class, "addform"])->name('addform');
Route::post("add", [ViewController::class, "add"])->name('add.data');
Route::get("/viewedit/{id}", [ViewController::class, "editform"])->name('editform');
Route::post("edit/{id}", [ViewController::class, "edit"])->name('edit.data');
Route::get("delete/{id}", [ViewController::class, "del"])->name('delete.data');

