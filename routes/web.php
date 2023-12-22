<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

//Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::get('/order/create', [App\Http\Controllers\OrderController::class, 'create']) ->name('order.create');
Route::post('/order', [App\Http\Controllers\OrderController::class, 'store']) ->name('order.store');
Route::get('/order/{id}', [App\Http\Controllers\OrderController::class, 'show']) ->name('order.show');
Route::get('/order/{id}/edit', [App\Http\Controllers\OrderController::class, 'edit']) ->name('order.edit');
Route::put('/order/{id}', [App\Http\Controllers\OrderController::class, 'update']) ->name('order.update');
Route::delete('/order/{id}', [App\Http\Controllers\OrderController::class, 'destroy']) ->name('order.destroy');

Route::any('/track', [App\Http\Controllers\OrderController::class, 'trackOrder'])->name('order.track');


Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('/client/create', [App\Http\Controllers\ClientController::class, 'create']) ->name('client.create');
Route::post('/client', [App\Http\Controllers\ClientController::class, 'store']) ->name('client.store');
Route::get('/client/{id}', [App\Http\Controllers\ClientController::class, 'show']) ->name('client.show');
Route::get('/client/{id}/edit', [App\Http\Controllers\ClientController::class, 'edit']) ->name('client.edit');
Route::put('/client/{id}', [App\Http\Controllers\ClientController::class, 'update']) ->name('client.update');
Route::delete('/client/{id}', [App\Http\Controllers\ClientController::class, 'destroy']) ->name('client.destroy');


Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role');
Route::get('/role/create', [App\Http\Controllers\RoleController::class, 'create']) ->name('role.create');
Route::post('/role', [App\Http\Controllers\RoleController::class, 'store']) ->name('role.store');
Route::get('/role/{id}', [App\Http\Controllers\RoleController::class, 'show']) ->name('role.show');
Route::get('/role/{id}/edit', [App\Http\Controllers\RoleController::class, 'edit']) ->name('role.edit');
Route::put('/role/{id}', [App\Http\Controllers\RoleController::class, 'update']) ->name('role.update');
Route::delete('/role/{id}', [App\Http\Controllers\RoleController::class, 'destroy']) ->name('role.destroy');


Route::get('/status', [App\Http\Controllers\StatusController::class, 'index'])->name('status');
Route::get('/status/create', [App\Http\Controllers\StatusController::class, 'create']) ->name('status.create');
Route::post('/status', [App\Http\Controllers\StatusController::class, 'store']) ->name('status.store');
Route::get('/status/{id}', [App\Http\Controllers\StatusController::class, 'show']) ->name('status.show');
Route::get('/status/{id}/edit', [App\Http\Controllers\StatusController::class, 'edit']) ->name('status.edit');
Route::put('/status/{id}', [App\Http\Controllers\StatusController::class, 'update']) ->name('status.update');
Route::delete('/status/{id}', [App\Http\Controllers\StatusController::class, 'destroy']) ->name('status.destroy');


Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');
Route::get('/payment/create', [App\Http\Controllers\PaymentController::class, 'create']) ->name('payment.create');
Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'store']) ->name('payment.store');
Route::get('/payment/{id}', [App\Http\Controllers\PaymentController::class, 'show']) ->name('payment.show');
Route::get('/payment/{id}/edit', [App\Http\Controllers\PaymentController::class, 'edit']) ->name('payment.edit');
Route::put('/payment/{id}', [App\Http\Controllers\PaymentController::class, 'update']) ->name('payment.update');
Route::delete('/payment/{id}', [App\Http\Controllers\PaymentController::class, 'destroy']) ->name('payment.destroy');


Route::get('/country', [App\Http\Controllers\CountryController::class, 'index'])->name('country');
Route::get('/country/create', [App\Http\Controllers\CountryController::class, 'create']) ->name('country.create');
Route::post('/country', [App\Http\Controllers\CountryController::class, 'store']) ->name('country.store');
Route::get('/country/{id}', [App\Http\Controllers\CountryController::class, 'show']) ->name('country.show');
Route::get('/country/{id}/edit', [App\Http\Controllers\CountryController::class, 'edit']) ->name('country.edit');
Route::put('/country/{id}', [App\Http\Controllers\CountryController::class, 'update']) ->name('country.update');
Route::delete('/country/{id}', [App\Http\Controllers\CountryController::class, 'destroy']) ->name('country.destroy');


Route::get('/department', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department');
Route::get('/department/create', [App\Http\Controllers\DepartmentController::class, 'create']) ->name('department.create');
Route::post('/department', [App\Http\Controllers\DepartmentController::class, 'store']) ->name('department.store');
Route::get('/department/{id}', [App\Http\Controllers\DepartmentController::class, 'show']) ->name('department.show');
Route::get('/department/{id}/edit', [App\Http\Controllers\DepartmentController::class, 'edit']) ->name('department.edit');
Route::put('/department/{id}', [App\Http\Controllers\DepartmentController::class, 'update']) ->name('department.update');
Route::delete('/department/{id}', [App\Http\Controllers\DepartmentController::class, 'destroy']) ->name('department.destroy');


Route::get('/rule', [App\Http\Controllers\RuleController::class, 'index'])->name('rule');
Route::get('/rule/create', [App\Http\Controllers\RuleController::class, 'create']) ->name('rule.create');
Route::post('/rule', [App\Http\Controllers\RuleController::class, 'store']) ->name('rule.store');
Route::get('/rule/{id}', [App\Http\Controllers\RuleController::class, 'show']) ->name('rule.show');
Route::get('/rule/{id}/edit', [App\Http\Controllers\RuleController::class, 'edit']) ->name('rule.edit');
Route::put('/rule/{id}', [App\Http\Controllers\RuleController::class, 'update']) ->name('rule.update');
Route::delete('/rule/{id}', [App\Http\Controllers\RuleController::class, 'destroy']) ->name('rule.destroy');


Route::get('/setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting');
Route::get('/setting/create', [App\Http\Controllers\SettingController::class, 'create']) ->name('setting.create');
Route::post('/setting', [App\Http\Controllers\SettingController::class, 'store']) ->name('setting.store');
Route::get('/setting/{id}', [App\Http\Controllers\SettingController::class, 'show']) ->name('setting.show');
Route::get('/setting/{id}/edit', [App\Http\Controllers\SettingController::class, 'edit']) ->name('setting.edit');
Route::put('/setting/{id}', [App\Http\Controllers\SettingController::class, 'update']) ->name('setting.update');
Route::delete('/setting/{id}', [App\Http\Controllers\SettingController::class, 'destroy']) ->name('setting.destroy');


