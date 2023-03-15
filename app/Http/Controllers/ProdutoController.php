<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function index(){
        return "LISTAR CONTROLLER PRODUTO";
    }

    function criar(){
        return "CRIAR CONTROLLER PRODUTO";
    }

    function atualizar(){
        return "ACTUALIZAR CONTROLLER PRODUTO";
    }

    function remover(){
        return "REMOVER CONTROLLER PRODUTO";
    }
}
