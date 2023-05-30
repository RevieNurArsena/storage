<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaterialController;
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

/*Route::get('/', function () {
    return view('login/index');
});*/

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

/* Material Request */
// Route::get('/materialreq', function () {
//     return view('admin/materialreq');
// });
Route::get('/create-material', function () {
    return view('admin/create-material');
});
Route::get('/edit-material', function () {
    return view('admin/edit-material');
});
Route::get('/view-material', function () {
    return view('admin/view-material');
});
Route::get('/SA-materialreq', function () {
    return view('superadmin/SA-materialreq');
});

/* Stock Count */
Route::get('/stockcount', function () {
    return view('admin/stockcount');
});
Route::get('/create-stock', function () {
    return view('admin/create-stock');
});
Route::get('/edit-stock', function () {
    return view('admin/edit-stock');
});
Route::get('/view-stock', function () {
    return view('admin/view-stock');
});
Route::get('/SA-stock', function () {
    return view('superadmin/SA-stock');
});

/* ITR */
Route::get('/ITR', function () {
    return view('admin/ITR');
});
Route::get('/create-ITR', function () {
    return view('admin/create-ITR');
});
Route::get('/edit-ITR', function () {
    return view('admin/edit-ITR');
});
Route::get('/view-ITR', function () {
    return view('admin/view-ITR');
});
Route::get('/SA-ITR', function () {
    return view('superadmin/SA-ITR');
});


/* Product */
Route::get('/product', function () {
    return view('admin/product');
});
Route::get('/create-product', function () {
    return view('admin/create-product');
});
Route::get('/view-product', function () {
    return view('admin/view-product');
});

Route::get('/SA-product', function () {
    return view('superadmin/SA-product');
});

/* Report */
Route::get('/report', function () {
    return view('admin/report');
});


Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/materialreq', [MaterialController::class, 'index']);
Route::post('/materialreq-create', [MaterialController::class, 'store']);