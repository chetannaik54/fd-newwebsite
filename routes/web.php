<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function () { return view('welcome'); })->name('welcome');

Route::prefix('solutions')->group(function () {

    Route::get('/' ,[PageController::class, 'our_competencies'])->name('solutions');

    Route::prefix('products')->group(function () {
        Route::get('/noc', [PageController::class, 'noc'])->name('noc');
        Route::get('/soc', [PageController::class, 'soc'])->name('soc');
        Route::get('/ams', [PageController::class, 'ams'])->name('ams');
        Route::get('/talent-kloud', [PageController::class, 'solution_processor'])->name('talent.kloud');
    });

    Route::prefix('business-processes')->group(function () {
        Route::get('/robotic-process-automation', [PageController::class, 'solution_processor'])->name('robotic-process-automation');
        Route::get('/business-process-management-&-automation', [PageController::class, 'solution_processor'])->name('business-process-management-automation');
    });

    Route::prefix('information-management')->group(function () {
        Route::get('/business-intelligence-&-analytical-services', [PageController::class, 'solution_processor'])->name('business-intelligence-&-analytical-services');
        Route::get('/database-&-storage-admin', [PageController::class, 'solution_processor'])->name('database-&-storage-admin');
    });

    Route::prefix('applications')->group(function () {
        Route::get('/application-development', [PageController::class, 'solution_processor'])->name('application-development');
        Route::get('/erp-application-development-services', [PageController::class, 'solution_processor'])->name('erp-application-development-services');
        Route::get('/application-management', [PageController::class, 'solution_processor'])->name('application-management');
        Route::get('/application-QA-&-validation', [PageController::class, 'solution_processor'])->name('application-qa-&-validation');
        Route::get('/devops-advisory', [PageController::class, 'solution_processor'])->name('devops-advisory');
    });

    Route::prefix('platform-&-Infrastructure')->group(function () {
        Route::get('/cloud-computing', [PageController::class, 'solution_processor'])->name('cloud-computing');
        Route::get('/it-&-infra-management', [PageController::class, 'solution_processor'])->name('it-&-infra-management');
        Route::get('/data-center-enablement', [PageController::class, 'solution_processor'])->name('data-center-enablement');
    });

    Route::get('/managed-services', [PageController::class, 'managed_services'])->name('managed-services');

    Route::prefix('staffing-solutions')->group(function () {
        Route::get('/contingent-staffing', [PageController::class, 'solution_processor'])->name('contingent-staffing');
        Route::get('/msp-partnership', [PageController::class, 'solution_processor'])->name('msp-partnership');
        Route::get('/short-term-engagement', [PageController::class, 'solution_processor'])->name('short-term-engagement');
        Route::get('/compliance', [PageController::class, 'solution_processor'])->name('compliance');
    });

    Route::get('/learning-academy', [PageController::class, 'solution_processor'])->name('learning-academy');
});

Route::get('industries', [PageController::class, 'industries'])->name('industries');

Route::prefix('careers')->group(function () {
    Route::get('/life-Culture-fidelis', [PageController::class, 'life_Culture_fidelis'])->name('life-fidelis');
    Route::get('/job-listing', [PageController::class, 'careers'])->name('careers');
    Route::get('/jobs/{slug}', [PageController::class, 'careerdetails'])->name('careers-details');
    Route::get('/refer-candidate', [PageController::class, 'refer_candidate'])->name('refer-candidate');
    Route::get('/apply-now', [PageController::class, 'privacy']);
});

Route::get('/blogs', [PageController::class, 'journal'])->name('blogs');
Route::get('/article/{articleid}', [PageController::class, 'article'])->name('article');

Route::get('/case-studies', [PageController::class, 'casestudies'])->name('case-studies');
Route::get('/case-studies-v2', [PageController::class, 'casestudiesv2'])->name('case-studies-v2');
Route::get('/case-studies/{slug}', [PageController::class, 'casedetails'])->name('case-details');

Route::get('/about-us', [PageController::class, 'about_us'])->name('about-us');
Route::get('/team/{person}', [PageController::class, 'team_member'])->name('team-member');

Route::prefix('corporate')->group(function () {
    Route::get('/our-competencies', [PageController::class, 'our_competencies'])->name('our-competencies');
    Route::get('/people', [PageController::class, 'people'])->name('people');
    Route::get('/journey', [PageController::class, 'journey'])->name('journey');
    Route::get('/mission-vision-values', [PageController::class, 'mission_vision_values'])->name('mission-vision-values');
    Route::get('/corporate-governance', [PageController::class, 'corporate_governance'])->name('corporate-governance');
    Route::get('/partners-alliances', [PageController::class, 'partners_alliances'])->name('partners-alliances');
    Route::get('/why-choose-us', [PageController::class, 'why_choose_us'])->name('why-choose-us');
    Route::get('/clients-speak', [PageController::class, 'clients_speak'])->name('clients-speak');
    Route::get('/locations', [PageController::class, 'locations'])->name('locations');
});

Route::get('/contact-us', [PageController::class, 'contactus'])->name('contact-us');
Route::post('store-data', [PageController::class, 'store-contactus'])->name('store-contact-us');

Route::get('free-demo', [PageController::class, 'free_demo'])->name('free-demo');

Route::post('subscription', [PageController::class, 'subscription'])->name('subscription');

Route::get('/map', function () { return view('pages.map'); })->name('map');

Route::post('contactRequest', [PageController::class, 'contactRequestPost'])->name('contactRequestPost');

Route::post('brochure-download', [PageController::class, 'brochuredownload'])->name('brochure-download');