<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

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
})->name('welcome');

Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('home');

Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/services', [FrontController::class, 'services'])->name('services');


Route::get('/buy_facebook_followers', [UserController::class, 'buy_facebook_followers'])->name('buy_facebook_followers');
Route::get('/buy_facebook_likes', [UserController::class, 'buy_facebook_likes'])->name('buy_facebook_likes');
Route::get('/buy_facebook_share', [UserController::class, 'buy_facebook_share'])->name('buy_facebook_share');
Route::get('/buy_facebook_post_likes', [UserController::class, 'buy_facebook_post_likes'])->name('buy_facebook_post_likes');

Route::get('/buy_instagram_followers', [UserController::class, 'buy_instagram_followers'])->name('buy_instagram_followers');
Route::get('/buy_instagram_likes', [UserController::class, 'buy_instagram_likes'])->name('buy_instagram_likes');

Route::get('/buy_tiktok_followers', [UserController::class, 'buy_tiktok_followers'])->name('buy_tiktok_followers');
Route::get('/buy_tiktok_likes', [UserController::class, 'buy_tiktok_likes'])->name('buy_tiktok_likes');
Route::get('/buy_tiktok_views', [UserController::class, 'buy_tiktok_views'])->name('buy_tiktok_views');

Route::get('/buy_youtube_likes', [UserController::class, 'buy_youtube_likes'])->name('buy_youtube_likes');
Route::get('/buy_youtube_subscribe', [UserController::class, 'buy_youtube_subscribe'])->name('buy_youtube_subscribe');
Route::get('/buy_youtube_views', [UserController::class, 'buy_youtube_views'])->name('buy_youtube_views');

Route::get('/facebook_followers_order', [UserController::class, 'facebook_followers_order'])->name('facebook_followers_order');
Route::get('/facebook_likes_order', [UserController::class, 'facebook_likes_order'])->name('facebook_likes_order');
Route::get('/facebook_post_likes_order', [UserController::class, 'facebook_post_likes_order'])->name('facebook_post_likes_order');
Route::get('/facebook_share_order', [UserController::class, 'facebook_share_order'])->name('facebook_share_order');


Route::get('/instagram_followers_order', [UserController::class, 'instagram_followers_order'])->name('instagram_followers_order');
Route::get('/instagram_photo_like_order', [UserController::class, 'instagram_photo_like_order'])->name('instagram_photo_like_order');


Route::get('/tiktok_followers_order', [UserController::class, 'tiktok_followers_order'])->name('tiktok_followers_order');
Route::get('/tiktok_video_likes_order', [UserController::class, 'tiktok_video_likes_order'])->name('tiktok_video_likes_order');
Route::get('/tiktok_video_views_order', [UserController::class, 'tiktok_video_views_order'])->name('tiktok_video_views_order');


Route::get('/youtube_subscribe_order', [UserController::class, 'youtube_subscribe_order'])->name('youtube_subscribe_order');
Route::get('/youtube_video_likes_order', [UserController::class, 'youtube_video_likes_order'])->name('youtube_video_likes_order');
Route::get('/youtube_views_order', [UserController::class, 'youtube_views_order'])->name('youtube_views_order');

Route::post('/order', [OrderController::class, 'order'])->name('order');

// admin route
Route::get('admin/home', [DashboardController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/orders', [AdminController::class, 'orders'])->name('admin.order')->middleware('is_admin');
Route::get('admin/users', [AdminController::class, 'users'])->name('admin.user')->middleware('is_admin');
Route::get('admin/admins', [AdminController::class, 'admins'])->name('admin.admin')->middleware('is_admin');
Route::get('admin/newadmin', [AdminController::class, 'addadmin'])->name('admin.add')->middleware('is_admin');
Route::post('admin/newadmin', [AdminController::class, 'proadmin'])->name('admin.pro')->middleware('is_admin');
Route::get('admin/deleteadmin/{id}', [AdminController::class, 'deleteadmin'])->name('admin.delete')->middleware('is_admin');
// javascript
Route::get('admin/users/status/{id}/{status}', [AdminController::class, 'userstatus'])->middleware('is_admin');
Route::get('admin/order/status/{id}/{status}', [AdminController::class, 'orderstatus'])->middleware('is_admin');