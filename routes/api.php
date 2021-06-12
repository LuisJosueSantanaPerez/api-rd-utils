<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\SectorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/paises/getAll', [CountryController::class, 'index']);
Route::get('/paises/getOne', [CountryController::class, 'show']);
Route::get('/paises/find', [CountryController::class, 'search']);

Route::get('/provincias/getAll', [ProvinceController::class, 'index']);
Route::get('/provincias/getOne', [ProvinceController::class, 'show']);
Route::get('/provincias/find', [ProvinceController::class, 'search']);
Route::get('/provincias/byCountry', [ProvinceController::class, 'byCountry']);

Route::get('/municipios/getAll', [MunicipalityController::class, 'index']);
Route::get('/municipios/getOne', [MunicipalityController::class, 'show']);
Route::get('/municipios/find', [MunicipalityController::class, 'search']);
Route::get('/municipios/byProvince', [MunicipalityController::class, 'byProvince']);

Route::get('/sectores/getAll', [SectorController::class, 'index']);
Route::get('/sectores/getOne', [SectorController::class, 'show']);
Route::get('/sectores/find', [SectorController::class, 'search']);
Route::get('/sectores/byMunicipality', [SectorController::class, 'byMunicipality']);