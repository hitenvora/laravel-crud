<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddCardController;
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
//     return view('welcome');
// });

// add card

Route::get('/',[AddCardController::class,'index']);
Route::post("/",[AddCardController::class,'store']);
Route::get("/",[AddCardController::class,'show']);
Route::get("/{id}",[AddCardController::class,'destroy']);
Route::get("/show/{id}",[AddCardController::class,'edit']);
Route::post("/show/{id}",[AddCardController::class,'update']);




