 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

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
    return view('clientproduk.index');
});


//AuthController//
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

















Route::prefix('admin')->middleware('auth')->group(function(){


			//homecontroller//
			Route::get('beranda', [HomeController::class, 'showBeranda']);
			Route::get('kategori', [HomeController::class, 'showKategori']);
			Route::get('login', [HomeController::class, 'showLogin']);
			Route::get('promo', [HomeController::class, 'showPromo']);
			Route::get('test/{produk}', [HomeController::class, 'test']);

			//produkcontroller//
			Route::get('produk', [ProdukController::class, 'index']);
			Route::get('produk/create', [ProdukController::class, 'create']);
			Route::post('produk', [ProdukController::class, 'store']);
			Route::get('produk/{produk}', [ProdukController::class, 'show']);
			Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
			Route::put('produk/{produk}', [ProdukController::class, 'update']);
			Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

			Route::post('produk/filter', [ProdukController::class, 'filter']);





		//kategoricontroller//
			Route::get('kategori', [KategoriController::class, 'index']);
			Route::get('kategori/create', [KategoriController::class, 'create']);
			Route::post('kategori', [KategoriController::class, 'store']);
			Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
			Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
			Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
			Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);




		//User//
			Route::get('user', [UserController::class, 'index']);
			Route::get('user/create', [UserController::class, 'create']);
			Route::post('user', [UserController::class, 'store']);
			Route::get('user/{user}', [UserController::class, 'show']);
			Route::get('user/{user}/edit', [UserController::class, 'edit']);
			Route::put('user/{user}', [UserController::class, 'update']);
			Route::delete('user/{user}', [UserController::class, 'destroy']);
	});






//clientprodukcontrollerr//

Route::get('/', [ClientProdukController::class, 'index']);
Route::get('clientproduk', [ClientProdukController::class, 'index']);
Route::get('detail/{detail}', [ClientProdukController::class, 'show']);

//kategori//
Route::get('clientkategori', [ClientProdukController::class, 'kategori']);
Route::get('about', [ClientProdukController::class, 'about']);
Route::get('index', [ClientProdukController::class, 'index']);
Route::post('clientproduk/filterclient', [ClientProdukController::class, 'filterClient']);

