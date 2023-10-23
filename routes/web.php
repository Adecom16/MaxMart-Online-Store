<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// create product
Route::post('/admin/products/post', [Controller::class, 'post'])-> name('product.post');
Route::get('/admin/add/product', [Controller::class, 'create']);


//register
Route::post('/register', [Controller::class, 'register'])-> name('register.post');
Route::get('/register/add', [Controller::class, 'user']);

//update and delete
Route::get('/admin/products', [Controller::class, 'index']);
Route::get('/admin/product/{id}', [Controller::class, 'edit']);
Route::put('/admin/products/post', [Controller::class, 'update'])->name('product.update');
Route::delete('/admin/products/delete', [Controller::class, 'delete'])->name('product.delete');


