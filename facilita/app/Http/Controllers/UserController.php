<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return "LISTAR CONTROLLER";
    }

    function criar(){
        return "CRIAR CONTROLLER";
    }

    function atualizar(){
        return "ACTUALIZAR CONTROLLER";
    }

    function remover(){
        return "REMOVER CONTROLLER";
    }
}
