<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\MainController as GuestController;
use App\Http\Controllers\Admin\MainController as AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Auth\AuthController;

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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [GuestController::class, 'index'])->name('dashboard');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/post-login', [AuthController::class, 'post_login'])->name('post.login');
});

Route::group(['middleware'=> 'auth'], function() {
    Route::get('/admin', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');

    Route::get('/admin-project', [ProjectController::class, 'index'])->name('admin.project');
    Route::get('/admin-create-project', [ProjectController::class, 'create'])->name('admin.create.project');
    Route::post('/admin-store-project', [ProjectController::class, 'store'])->name('admin.store.project');
    Route::get('/admin-edit-project-{id}', [ProjectController::class, 'edit'])->name('admin.edit.project');
    Route::post('/admin-update-project-{id}', [ProjectController::class, 'update'])->name('admin.update.project');
    Route::get('/admin-detail-project-{id}', [ProjectController::class, 'detail'])->name('admin.detail.project');
    Route::delete('/admin-delete-project-{id}', [ProjectController::class, 'delete'])->name('admin.delete.project');

    Route::get('/admin-product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/admin-create-product', [ProductController::class, 'create'])->name('admin.create.product');
    Route::post('/admin-store-product', [ProductController::class, 'store'])->name('admin.store.product');
    Route::get('/admin-edit-product-{id}', [ProductController::class, 'edit'])->name('admin.edit.product');
    Route::post('/admin-update-product-{id}', [ProductController::class, 'update'])->name('admin.update.product');
    Route::get('/admin-detail-product-{id}', [ProductController::class, 'detail'])->name('admin.detail.product');
    Route::delete('/admin-delete-product-{id}', [ProductController::class, 'delete'])->name('admin.delete.product');

    Route::get('/admin-berita', [NewsController::class, 'index'])->name('admin.news');
    Route::get('/admin-create-berita', [NewsController::class, 'create'])->name('admin.create.news');
    Route::post('/admin-store-berita', [NewsController::class, 'store'])->name('admin.store.news');
    Route::get('/admin-edit-berita-{id}', [NewsController::class, 'edit'])->name('admin.edit.news');
    Route::post('/admin-update-berita-{id}', [NewsController::class, 'update'])->name('admin.update.news');
    Route::get('/admin-detail-berita-{id}', [NewsController::class, 'detail'])->name('admin.detail.news');
    Route::delete('/admin-delete-berita-{id}', [NewsController::class, 'delete'])->name('admin.delete.news');

    Route::get('/admin-testimoni', [TestimonialsController::class, 'index'])->name('admin.testimoni');
    Route::get('/admin-create-testimoni', [TestimonialsController::class, 'create'])->name('admin.create.testimoni');
    Route::post('/admin-store-testimoni', [TestimonialsController::class, 'store'])->name('admin.store.testimoni');
    Route::get('/admin-edit-testimoni-{id}', [TestimonialsController::class, 'edit'])->name('admin.edit.testimoni');
    Route::post('/admin-update-testimoni-{id}', [TestimonialsController::class, 'update'])->name('admin.update.testimoni');
    Route::get('/admin-detail-testimoni-{id}', [TestimonialsController::class, 'detail'])->name('admin.detail.testimoni');
    Route::delete('/admin-delete-testimoni-{id}', [TestimonialsController::class, 'delete'])->name('admin.delete.testimoni');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});