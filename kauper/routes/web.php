<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\RequestController;

// Публічні сторінки
Route::get('/', function () { return view('pages.home'); });
Route::get('/company', function () { return view('pages.company'); });
Route::get('/company/news', function () { return view('pages.company-news'); });
Route::get('/company/clients', function () { return view('pages.company-clients'); });
Route::get('/company/reviews', function () { return view('pages.company-reviews'); });

Route::get('/services', function () { return view('pages.services'); });
Route::get('/services/projects', function () { return view('pages.services.projects'); });
Route::get('/services/resources', function () { return view('pages.services.res'); });
Route::get('/services/finance', function () { return view('pages.services.finance'); });
Route::get('/services/planning', function () { return view('pages.services.planning'); });
Route::get('/services/reports', function () { return view('pages.services.reports'); });
Route::get('/services/team', function () { return view('pages.services.team'); });
Route::get('/services/quality', function () { return view('pages.services.quality'); });
Route::get('/services/documents', function () { return view('pages.services.documents'); });
Route::post('/requests', [RequestController::class, 'store']);

Route::get('/projects', function () { return view('pages.projects'); });
Route::get('/prices', [PriceController::class, 'index']);
Route::get('/documents', function () { return view('pages.documents'); });
Route::get('/contacts', function () { return view('pages.contacts'); });
Route::post('/contacts/send', [App\Http\Controllers\ContactController::class, 'send']);
// Логін адміна
Route::get('/admin/login', [AdminAuthController::class, 'loginForm']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout']);

// Адмін панель
Route::prefix('admin')->middleware('admin.auth')->group(function () {
    Route::get('/', function () { return view('admin.index'); });

    // Ціни
    Route::get('/prices', [PriceController::class, 'adminIndex']);
    Route::get('/prices/create', [PriceController::class, 'create']);
    Route::post('/prices', [PriceController::class, 'store']);
    Route::get('/prices/{price}/edit', [PriceController::class, 'edit']);
    Route::put('/prices/{price}', [PriceController::class, 'update']);
    Route::delete('/prices/{price}', [PriceController::class, 'destroy']);

    // Інші розділи
    Route::get('/services', function () { return view('admin.services.index'); });
    Route::get('/projects', function () { return view('admin.projects.index'); });
    Route::get('/company', function () { return view('admin.company.index'); });

    // Заявки
    Route::get('/requests', [RequestController::class, 'adminIndex']);
    Route::post('/requests/{id}/status', [RequestController::class, 'updateStatus']);
});