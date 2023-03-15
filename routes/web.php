<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Comuna_distritoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\Loja_produtoController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\SeccaoController;
use App\Http\Controllers\Sub_categoriaController;
use App\Http\Controllers\UserController;
use App\Models\Categoria;
use App\Models\Comuna_distrito;
use App\Models\Endereco;
use App\Models\Loja;
use App\Models\Municipio;
use App\Models\Produto;
use App\Models\Produto_loja;
use App\Models\Provincia;
use App\Models\Seccao;
use Database\Seeders\MunicipioSeeder;
use Database\Seeders\SeccaoSeeder;
use Illuminate\Support\Facades\Route;

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
    return view('portal/inicio');
});
Route::get('/teste7', function () {
    return  Comuna_distrito::find(1)->enderecos;
});

//get,post,delete,(put,path): (método http)
// Agrupamento (group)
// Prefix
// name

Route::get("/listar",[CategoriaController::class,'index']);
Route::get("/criar",[CategoriaController::class,'criar']);
Route::put("/atualizar",[CategoriaController::class,'atualizar']);
Route::delete("/remover",[CategoriaController::class,'remover']);

Route::get("/listar1",[Comuna_distritoController::class,'index']);
Route::get("/criar1",[Comuna_distritoController::class,'criar']);
Route::put("/atualizar1",[Comuna_distritoController::class,'atualizar']);
Route::delete("/remover1",[Comuna_distritoController::class,'remover']);

Route::get("/listar2",[EnderecoController::class,'index']);
Route::get("/criar2",[EnderecoController::class,'criar']);
Route::put("/atualizar2",[EnderecoController::class,'atualizar']);
Route::delete("/remover2",[EnderecoController::class,'remover']);

Route::get("/listar3",[Loja_produtoController::class,'index']);
Route::get("/criar3",[Loja_produtoController::class,'criar']);
Route::put("/atualizar3",[Loja_produtoController::class,'atualizar']);
Route::delete("/remover3",[Loja_produtoController::class,'remover']);

Route::get("/listar4",[LojaController::class,'index']);
Route::get("/criar4",[LojaController::class,'criar']);
Route::put("/atualizar4",[LojaController::class,'atualizar']);
Route::delete("/remover4",[LojaController::class,'remover']);

Route::get("/listar5",[MunicipioController::class,'index']);
Route::get("/criar5",[MunicipioController::class,'criar']);
Route::put("/atualizar5",[MunicipioController::class,'atualizar']);
Route::delete("/remover5",[MunicipioController::class,'remover']);

Route::get("/listar6",[ProdutoController::class,'index']);
Route::get("/criar6",[ProdutoController::class,'criar']);
Route::put("/atualizar6",[ProdutoController::class,'atualizar']);
Route::delete("/remover6",[ProdutoController::class,'remover']);

Route::get("/listar7",[ProvinciaController::class,'index']);
Route::get("/criar7",[ProvinciaController::class,'criar']);
Route::put("/atualizar7",[ProvinciaController::class,'atualizar']);
Route::delete("/remover7",[ProvinciaController::class,'remover']);

Route::get("/listar8",[SeccaoController::class,'index']);
Route::get("/criar8",[SeccaoController::class,'criar']);
Route::put("/atualizar8",[SeccaoController::class,'atualizar']);
Route::delete("/remover8",[SeccaoController::class,'remover']);

Route::get("/listar9",[Sub_categoriaController::class,'index']);
Route::get("/criar9",[Sub_categoriaController::class,'criar']);
Route::put("/atualizar9",[Sub_categoriaController::class,'atualizar']);
Route::delete("/remover9",[Sub_categoriaController::class,'remover']);

Route::get("/listar10",[UserController::class,'index']);
Route::get("/criar10",[UserController::class,'criar']);
Route::put("/atualizar10",[UserController::class,'atualizar']);
Route::delete("/remover10",[UserController::class,'remover']);






