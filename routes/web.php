<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubscriptionController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', [UserController::class, 'intro'])->name('intro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function()
{



    # code...
    // Route::get('post', [PostController::class,'index']);
    // Route::get('/post/create', [PostController::class, 'create']);
    // Route::post('/post',[PostController::class,'store']);
    // Route::get('/post/{id}/edit',[PostController::class,'edit']);
    // Route::post('/post/update/{id}',[PostController::class,'update']);
    // Route::post('post/delete/{id}',[PostCOntroller::class,'destroy']);
    // Route::get('view/{id}',[PostController::class,'show']);
    // Route::post('view',[CommentController::class,'store']);


    Route::get('permission', [PermissionController::class,'index']);
    Route::post('/addpermission', [PermissionController::class,'store']);
    Route::get('/permission/{id}/modify', [PermissionController::class,'edit']);
    Route::post('/permission/update/{id}',[PermissionController::class,'update']);
    Route::post('permission/delete/{id}',[PermissionController::class,'destroy']);

    Route::get('role', [RoleController::class,'index']);
    Route::post('/create', [RoleController::class,'store']);
    Route::get('role/create', [RoleController::class,'create']);
    Route::post('role/delete/{id}',[RoleController::class,'destroy']);
    Route::get('/role/{id}/edit',[RoleController::class,'edit']);
    Route::post('/role/update/{id}',[RoleController::class,'update']);
    Route::get('/role/modify/{id}',[RoleController::class,'show']);
    Route::post('/role/modify/{id}',[RoleController::class,'update_role_has_permission']);

    Route::get('subscription', [SubscriptionController::class,'index']);
    Route::get('subscription/roles-setup/{id}', [SubscriptionController::class,'show']);
    Route::post('subscription/roles-setup/{id}', [SubscriptionController::class,'modify_roles']);
    Route::get('subscription/status/{id}', [SubscriptionController::class,'show_status']);
    Route::post('subscription/status/{id}', [SubscriptionController::class,'modify_status']);

    Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('/profile/edit',[UserController::class,'index']);
    Route::post('/profile/update/{id}',[UserController::class,'update']);
    Route::get('/profile/change-password',[UserController::class,'change']);
    Route::post('/profile/change-password',[UserController::class,'update_password'])->name('changePasswordPost');
    Route::post('/profile/avatar',[UserController::class,'update_avatar']);

});
