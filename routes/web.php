<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SalesteamsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\QuotationController;
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
    return view('welcome');
});

// Route::get('/user', function () {
//     return view('Frontend/index');
// });

Route::get('index', [IndexController::class, 'index'])->name('homepage');
Route::get('sales-teams', [SalesteamsController::class, 'salesTeam'])->name('sales-teams');
Route::get('sales-teams-new', [SalesteamsController::class, 'salesTeamNew'])->name('sales-teams-new');

Route::get('customer', [CustomerController::class, 'customerIndex'])->name('customer-index');
Route::get('customer-create', [CustomerController::class, 'customerCreate'])->name('customer-create');

Route::get('quotations', [QuotationController::class, 'quotationIndex'])->name('quotation-index');
Route::get('quotations-create', [QuotationController::class, 'quotationCreate'])->name('quotation-create');

Route::get('mytask', [IndexController::class, 'mytask'])->name('Frontend.mytasks');
Route::get('createtask', [IndexController::class, 'createtask'])->name('Frontend.create_task');

