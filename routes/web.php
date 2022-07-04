<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\carController;
use App\Http\Controllers\admin\companyController;
use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\admin\userController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\fontSiteController;
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
    return view('user.indexLogin');
});

//Route::get('/conform', function () {
//    return view('user.conform_order');
//})->name('conform');


//
//Route::get('/aboutWeb', function () {
//    return view('user.index')->name('index');
//});
//
//Route::get('/aboutWeb', function () {
//    return view('user.about')->name('about');
//});
//
//
//Route::get('/companyList', function () {
//    return view('user.companyList')->name('companyList');
//});
//
//
Route::get('/update', function () {
    return view('admin.update_admin');
});
//
//
//Route::get('/carAdd', function () {
//    return view('user.carAdd')->name('user.carAdd');
//});
//
//
//Route::get('/CompanyAdd', function () {
//    return view('user.CompanyAdd')->name('user.CompanyAdd');
//});
//
//
//Route::get('/contact', function () {
//    return view('user.contact')->name('user.contact');
//});

Route::get('/',[fontSiteController::class , 'showHome'] )->name('indexLogin');
Route::get('/aboutWeb',[fontSiteController::class , 'showAboutUs'] )->name('about');
Route::get('/companyList',[fontSiteController::class , 'showCompany'] )->name('companyList');
Route::get('/carList',[fontSiteController::class , 'showCars'] )->name('carList');
Route::get('/carAdd',[fontSiteController::class , 'showAddCars'] )->name('carAdd');
Route::get('/companyadd',[fontSiteController::class , 'showAddCompany'] )->name('CompanyAdd');
Route::get('/contact',[fontSiteController::class , 'showContactUs'] )->name('contact');
Route::get('/order',[fontSiteController::class , 'order'] )->name('order');
Route::get('/conformOrder',[fontSiteController::class , 'conformOrder'] )->name('conformOrder');


Route::get('/addadmin',[dashController::class , 'addAdmin'] )->name('addAdmin');
Route::get('/adduser',[dashController::class , 'addUser'] )->name('addUser');
Route::get('/show_admin',[dashController::class , 'showAdmin'] )->name('showAdmin');
Route::get('/show_admin_car',[dashController::class , 'showAdminCar'] )->name('showAdminCar');
Route::get('/show_admin_company',[dashController::class , 'showAdminCompany'] )->name('showAdminCompany');
Route::get('/showuser',[dashController::class , 'showUser'] )->name('showUser');
Route::get('/updateadmin',[dashController::class , 'updateAdmin'] )->name('updateAdmin');
Route::get('/updateuser',[dashController::class , 'updateUser'] )->name('updateUser');
//Route::get('/login',[dashController::class , 'login'] )->name('login');
//Route::get('/loginUser',[dashController::class , 'loginUser'] )->name('loginUser');

Route::post('/authenticate',[AuthController::class,'authenticate'])->name('authenticate');
Route::get('/login',[AuthController::class,'loginAdmin'])->name('login');
Route::get('/loginUser',[AuthController::class,'loginUser'])->name('loginUser');




Route::prefix('admin')->middleware('auth')->group(function(){

//    Route::get('/',[dashboardController::class , 'showHome'] )->name('dashboard');
    Route::resource('/company',companyController::class);
    Route::resource('/car',carController::class);
    Route::resource('/admins',adminController::class);
    Route::resource('/users',userController::class);
    Route::resource('/orders',orderController::class);

});





Route::resource('/company',companyController::class);
Route::get('/company',[companyController::class,'store']);

Route::resource('/car',carController::class);
Route::get('/car',[carController::class,'store']);

Route::resource('/admins',adminController::class);
Route::get('/admins',[adminController::class,'store']);
Route::get('/admins',[adminController::class,'update']);

Route::resource('/users',userController::class);
Route::get('/users',[userController::class,'store']);


Route::resource('/orders',orderController::class);
Route::get('/orders',[orderController::class,'store']);


Route::get('/users',[userController::class,'destroy'])->name('destroy');
Route::get('/users',[userController::class,'update'])->name('update');


