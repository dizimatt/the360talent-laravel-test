<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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
});
Route::get('/companyemployees/{id}', [CompanyController::class, 'getEmployeesOfCompany']);
Route::post('/companyemployees', [CompanyController::class, 'addEmployee']);
Route::put('/companyemployee/{id}', [CompanyController::class, 'updateEmployee']);
Route::delete('/companyemployee/{id}', [CompanyController::class, 'deleteEmployee']);

