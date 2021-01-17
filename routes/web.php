<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ColController;
use App\Http\Controllers\RekomendasiController;

use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     $nama = 'FathanWebs';
//     return view('index',['nama' => $nama ]);
// });

// Route::get('/profile', function () {
//     return view('other/profile');
// });

// Route::get('/about', function () {
    
//     return view('other.about');
// });

//user
Route::post('/register', [UserController::class,'postRegister']
);

Route::post('/login', [UserController::class,'postLogin']
);

Route::get('/login', [UserController::class,'getLogin']
);

Route::get('/register', [UserController::class,'getRegister']
);



//product(produk)
// Route::post('/index', [ColController::class, 'index']);
Route::get('/', [Controller::class, 'index']);

// profile
// Route::get('/profile', [ColController::class, 'profile']);
Route::patch('profile/update_bobot/{id}', [ColController::class,'update_bobot'])->name('profile.update_bobot');
Route::post('profile/bobot_api', [ColController::class,'bobot_api'])->name('profile.bobot_api');
Route::get('profile/edit_bobot/{id}', [ColController::class,'edit_bobot'])->name('profile.edit_bobot');

Route::resource('profile', ColController::class);
Route::post('profile/api', [ColController::class,'api'])->name('profile.api');

Route::get('/rekomendasi', [RekomendasiController::class,'index']);
// Route::post('core/api', 'ColController@api')->name('core.api');
// profile(produk)

// bobot
// Route::resource('bobot', BobotController::class);
// Route::post('profile/api', [ColController::class,'api'])->name('profile.api');
// bobot

// raw before
// Route::post('produk/api', [ColController::class,'api'])->name('produk.api');

Route::get('/about', [ColController::class, 'about']);

Route::get('/product/create', [ProductsController::class, 'create']); //add
Route::post('/product', [ProductsController::class, 'store']);//nyimpen ke database

Route::get('/product/{product}', [ProductsController::class, 'show']);//detail

Route::get('/product/{product}/edit',[ProductsController::class,'edit']);//edit
Route::patch('/product/{product}',[ProductsController::class,'update']);//updatekedatabase

Route::get('/product', [ProductsController::class, 'index']);//showall


Route::delete('/product/{product}', [ProductsController::class,'destroy']);//delete


    
// Route::get('/upload', [ProductsController::class, 'upload']);
// Route::get('/upload/proses', [ProductsController::class, 'proses_upload']);