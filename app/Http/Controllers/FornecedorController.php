<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
   public function index(){
     $fornecedores  = [
     0 => ['nome' => 'fornecedores 1', 'status' => 'S', 'CNPJ' => '0000000000'],
     1 => ['nome' => 'fornecedores 2', 'status' => 'N']];
     return view('app.fornecedor.index', compact('fornecedores'));
    }
}
