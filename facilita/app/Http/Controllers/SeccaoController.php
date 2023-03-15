<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccaoController extends Controller
{
    function index(){
        return "LISTAR CONTROLLER SECCAO";
    }

    function criar(){
        return "CRIAR CONTROLLER SECCAO";
    }

    function atualizar(){
        return "ACTUALIZAR CONTROLLER SECCAO";
    }

    function remover(){
        return "REMOVER CONTROLLER SECCAO";
    }
}
