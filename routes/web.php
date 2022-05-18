<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    SourcesController
};

Route::get('/', function () {
    return view('welcome');
});

/*
* Route Default
*/
Route::get('sources', [SourcesController::class, "index"])->name("sources.index");
Route::get('sources/create', [SourcesController::class, "create"])->name("sources.create");
Route::get('sources/edit/{id}', [SourcesController::class, "edit"])->name("sources.edit");
Route::post('sources', [SourcesController::class, "store"])->name("sources.store");
Route::post('sources/delete/{id}', [SourcesController::class, "delete"])->name("sources.delete");