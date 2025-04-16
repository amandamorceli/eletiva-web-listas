<?php

use App\Models\Produto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [AuthController::class, 'showFormLogin'])->name('/login'); // não obrigatorio. quando o middlewaer bloquear a rota, ele redireciona para login
Route::post("/login", [AuthController::class, 'login']);

// para restringir acesso a telas se não foi autendicado - no middlewear
Route::middleware("auth")->group(function(){
    Route::resource("produtos", ProdutoController::class);
    Route::get("/logout",[AuthController::class, 'logout']);
});