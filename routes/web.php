<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;



Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/signup', [UsersController::class, 'showSignUp']);
Route::post('/signup', [UsersController::class, 'signup']);
Route::get('/signin', [UsersController::class, 'showSignIn']);
Route::post('/signin', [UsersController::class, 'signin']);
Route::get('/signout', [UsersController::class, 'signout']);
Route::get('/faqs', [UsersController::class, 'showFaqs']);
Route::get('/profile', [UsersController::class, 'showProfile']);
Route::post('/profile/edit', [UsersController::class, 'editProfile']);
Route::get('/profile/edit', [UsersController::class, 'showEditProfile']);
// Route::get('/profile/edit/{id}/upload', [UsersController::class, 'showUpload']);
Route::post('/profile/edit/{id}/upload', [UsersController::class, 'upload']);
Route::get('/address', [UsersController::class, 'showAddress']);
Route::post('/address/edit', [UsersController::class, 'editAddress']);
Route::get('/address/edit', [UsersController::class, 'showEditAddress']);


Route::get('/menu', [OrdersController::class, 'showMenu']);
Route::post('/orders', [OrdersController::class, 'takeOrders']);
Route::get('/orders', [OrdersController::class, 'showOrders']);
Route::post('/orders/checkout', [OrdersController::class, 'placeOrder']);




//admin
Route::get('/admin', [AdminController::class, 'adminDashboard']);
Route::get('/admin/users', [AdminController::class, 'showAdminUser']);
Route::post('/admin/users/search', [AdminController::class, 'searchUser']);