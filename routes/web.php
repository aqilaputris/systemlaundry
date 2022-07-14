<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Package\PackageController;
use App\Http\Controllers\Backend\Listorder\ListorderController;


/*
|--------------------------------------------------------------------------
| Web Routess
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

Route::get('/admin/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/auth/postlogin', [AuthController::class, 'postLogin'])->name('postLogin');


Route::group(['middleware' => 'ceklevel'], function () {
Route::get('/backend/dashboard',[DashboardController::class, 'getIndex']);
    // ADMIN
Route::get('/backend/admin/index',[AdminController::class, 'getIndex']);
Route::get('/backend/admin/formadd',[AdminController::class, 'getAdd']);
Route::post('/backend/admin/insertformadd',[AdminController::class, 'postSave']);
Route::get('/backend/admin/formedit/{id}',[AdminController::class, 'getEdit']);
Route::post('/backend/admin/updateformedit/{id}',[AdminController::class, 'postEdit']);
Route::get('/backend/admin/detailadmin/{id}',[AdminController::class, 'getDetail']);
Route::get('/backend/admin/delete/{id}',[AdminController::class, 'getDelete']);
    // PACKAGE
Route::get('/backend/package/index',[PackageController::class, 'getIndex']);
Route::get('/backend/package/formadd',[PackageController::class, 'getAdd']);
Route::post('/backend/package/insertformadd',[PackageController::class, 'postSave']);
Route::get('/backend/package/formedit/{id}',[PackageController::class, 'getEdit']);
Route::post('/backend/package/updateformedit/{id}',[PackageController::class, 'postEdit']);
Route::get('/backend/package/detailpackage/{id}',[PackageController::class, 'getDetail']);
Route::get('/backend/package/delete/{id}',[PackageController::class, 'getDelete']);
    // LIST ORDER
Route::get('/backend/listorder/index',[ListorderController::class, 'getIndex']);
Route::get('/backend/listorder/formadd',[ListorderController::class, 'getAdd']);
Route::post('/backend/listorder/insertformadd',[ListorderController::class, 'postSave']);
Route::get('/backend/listorder/formedit/{id}',[ListorderController::class, 'getEdit']);
Route::post('/backend/listorder/updateformedit/{id}',[ListorderController::class, 'postEdit']);
Route::get('/backend/listorder/detaillistorder/{id}',[ListorderController::class, 'getDetail']);
Route::get('/backend/listorder/delete/{id}',[ListorderController::class, 'getDelete']);
    // CRUD EXCEL
Route::get('/listtoday',[ListorderController::class, 'index']);
Route::get('/listtoday/export_excel',[ListorderController::class, 'export_excel']);
});


    // FRONTEND
Route::get('/frontend',[FrontendController::class, 'index']);
Route::get('/frontend/order',[FrontendController::class, 'order']);

Route::get('/frontend/nota',[FrontendController::class, 'nota']);
Route::get('/frontend/printnota',[FrontendController::class, 'printnota']);

Route::get('/frontend/express',[FrontendController::class, 'express']);
Route::post('/frontend/express',[FrontendController::class, 'postSave']);
Route::get('/frontend/express/cari',[FrontendController::class, 'cari'])->name('cari');

Route::get('/frontend/laundry',[FrontendController::class, 'laundry']);
Route::post('/frontend/laundry',[FrontendController::class, 'postSave']);
Route::get('/frontend/laundry/cari',[FrontendController::class, 'mencari'])->name('mencari');

Route::post('/frontend/ambilpaket',[FrontendController::class, 'ambilpaket']);
