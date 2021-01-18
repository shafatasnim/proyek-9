<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\API\AlamatResource;
use App\Http\controllers\API\ProdukResource;

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

Route::resource('produk', ProdukResource::class);

Route::get('provinsi/{id}', [AlamatResource::class, 'getKabupaten']);
Route::get('kabupaten/{id}', [AlamatResource::class, 'getKecamatan']);
Route::get('kecamatan/{id}', [AlamatResource::class, 'getDesa']);
