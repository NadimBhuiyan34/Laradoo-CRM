<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SalesteamsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\RecurringController;
use App\Http\Controllers\LostreasonController;
use App\Http\Controllers\ActivityTypeController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\LeadMiningController;
use App\Http\Controllers\LeadRulesController;
use App\Http\Controllers\RdashboardController;
use App\Http\Controllers\ForecastController;
use App\Http\Controllers\LeadAnalysisController;
use App\Http\Controllers\PipelineAnalysisController;
use App\Http\Controllers\ActivitiesAnalysisController;
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

Route::get('activities', [ActivitiesController::class, 'activitiesIndex'])->name('activities-index');
Route::get('activities-create', [ActivitiesController::class, 'activitiesCreate'])->name('activities-create');

Route::get('teams', [TeamsController::class, 'teamsIndex'])->name('teams-index');
Route::get('teams-create', [TeamsController::class, 'teamsCreate'])->name('teams-create');

Route::get('leads', [LeadsController::class, 'leadsIndex'])->name('leads-index');
Route::get('leads-create', [LeadsController::class, 'leadsCreate'])->name('leads-create');

Route::get('activity-type', [ActivityTypeController::class, 'activityTypeIndex'])->name('activity-type-index');
Route::get('activity-type-create', [ActivityTypeController::class, 'activityTypeCreate'])->name('activity-type-create');

Route::get('recurring', [RecurringController::class, 'recurringIndex'])->name('recurring-index');
Route::get('recurring-create', [RecurringController::class, 'recurringCreate'])->name('recurring-create');

Route::get('tags', [TagsController::class, 'tagsIndex'])->name('tags-index');
Route::get('tags-create', [TagsController::class, 'tagsCreate'])->name('tags-create');

Route::get('lostreason', [LostreasonController::class, 'lostreasonIndex'])->name('lostreason-index');
Route::get('lostreason-create', [LostreasonController::class, 'lostreasonCreate'])->name('lostreason-create');

Route::get('lead-mining', [LeadMiningController::class, 'leadMiningIndex'])->name('lead-mining-index');
Route::get('lead-mining-create', [LeadMiningController::class, 'leadMiningCreate'])->name('lead-mining-create');

Route::get('lead-rules', [LeadRulesController::class, 'leadRulesIndex'])->name('lead-rules-index');
Route::get('lead-rules-create', [LeadRulesController::class, 'leadRulesCreate'])->name('lead-rules-create');

 

// Reporting
Route::get('r-dashboard', [RdashboardController::class, 'rdashboardIndex'])->name('r-dashboard-index');
 
Route::get('forecast', [ForecastController::class, 'forecastIndex'])->name('forecast-index');
Route::get('forecast-create', [ForecastController::class, 'forecastCreate'])->name('forecast-create');
 
Route::get('lead-analysis', [LeadAnalysisController::class, 'leadAnalysis'])->name('lead-analysis');

Route::get('pipeline-analysis', [PipelineAnalysisController::class, 'pipelineAnalysis'])->name('pipeline-analysis');

Route::get('activities-analysis', [ActivitiesAnalysisController::class, 'activitiesAnalysis'])->name('activities-analysis');
 