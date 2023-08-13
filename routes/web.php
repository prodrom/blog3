<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BlogFController;
use App\Http\Controllers\Backend\BlogBController;
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
    return view('index');
})->name("front.index");

Route::get("/blogs", [BlogFController::class,"index"])->name("front.blogs.index");
Route::get("/blogs/show/{id}", [BlogFController::class,"show"])->name("front.blogs.show");

Route::group(["prefix"=>"admin"],function (){
    Route::prefix("blogs")->group(function (){
        Route::get("/", [BlogBController::class,"index"])->name("admin.blogs.index");
        Route::get("/create", [BlogBController::class,"create"])->name("admin.blogs.create");
        Route::post("/store", [BlogBController::class,"store"])->name("admin.blogs.store");
        Route::get("/destroy/{id}", [BlogBController::class,"destroy"])->name("admin.blogs.destroy");
        Route::get("/edit/{id}", [BlogBController::class,"edit"])->name("admin.blogs.edit");
        Route::post("/update", [BlogBController::class,"update"])->name("admin.blogs.update");
    });
});
