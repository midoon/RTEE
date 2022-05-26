<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\WargaGuestMiddleWare;
use App\Http\Middleware\WargaUserMiddleware;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);


Route::controller(UserController::class)->group(function(){
    Route::get("/login", "login")->middleware([GuestMiddleware::class])->middleware([WargaGuestMiddleWare::class]);
    Route::post("/login", "doLogin")->middleware([GuestMiddleware::class]);
    Route::post("/logout","doLogout")->middleware([UserMiddleware::class]);
});

Route::controller(DashboardController::class)
    ->middleware([UserMiddleware::class])->group(function(){
        Route::get("/dashboard", "show");
        Route::get("/dashboard/listResident", "listResident");
        Route::get("/dashboard/addResident", "addResident");
        Route::get("/dashboard/listFamily", "listFamily");
        Route::get("/dashboard/addFamily", "addFamily");
});

Route::controller(ResidentController::class)
    ->middleware([UserMiddleware::class])->group(function(){
        Route::get("/resident", "show");
        Route::get("/resident/add", "showAdd");
        Route::post("/resident/store", "store");
        Route::get("/resident/{id}/edit","edit");
        Route::put("/resident/{id}", "update");
        Route::delete("/resident/{id}", "destroy");
        
});

Route::controller(FamilyController::class)
    ->middleware([UserMiddleware::class])->group(function(){
        Route::get("/family", "show");
        Route::get("/family/add", "showAdd");
        Route::post("/family/store", "store");
        Route::get("/family/{id}/edit","edit");
        Route::put("/family/{id}", "update");
        Route::delete("/family/{id}", "destroy");
        Route::get("/family/{id}/anggota", "anggota");
});

//for warga
Route::controller(WargaController::class)
->middleware(WargaGuestMiddleWare::class)->group(function(){
    Route::post("/warga-login","login");
});
Route::controller(WargaController::class)
    ->middleware([WargaUserMiddleware::class])->group(function(){
        Route::get("/warga-dashboard", "index");
        Route::post("/warga-logout","logout");
        //page
        Route::get('/warga/list-resident','listResident');
        Route::get('/warga/list-family','listFamily');
        Route::get("/warga/family/{id}/anggota", "anggota");
});