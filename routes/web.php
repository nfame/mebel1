<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

Route::get('/', [MainController::class, 'homepage'])->name('homepage');
Route::get('catalog', [MainController::class, 'getCatalogList'])->name('catalog.page.list');
Route::get('catalog/{catname}', [MainController::class, 'getCatalog'])->name('catalog.page');
Route::get('catalog/{catname}/{alias}', [MainController::class, 'getItemsForList'])->name('catalog.view.item');

Route::get('contacts', [MainController::class, 'contacts'])->name('sait.contacts');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/catalogs', [HomeController::class, 'getCatalogs'])->name('admin.catalog.list');
Route::get('/admin/items', [HomeController::class, 'getItems'])->name('admin.items.list');
Route::get('/admin/items/create', [HomeController::class, 'createItems'])->name('admin.items.list.create');
Route::post('/admin/items/create', [HomeController::class, 'createItemsStore'])->name('admin.items.list.store');
