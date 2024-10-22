<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExcelMergeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ListContentController;
use App\Http\Controllers\UserHomeController;

Route::get('/excel/merge', [ExcelMergeController::class, 'showForm'])->name('excel.merge.form');
Route::post('/excel/merge', [ExcelMergeController::class, 'mergeFiles'])->name('excel.merge');
Route::get('/', [LoginController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/konten', [ContentController::class, 'index']);
Route::get('/nilai', [NilaiController::class, 'index']);
Route::get('/listkonten', [ListContentController::class, 'index']);
Route::get('/userhome', [UserHomeController::class, 'index']);


