<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    function teste($opicional_id){
        return view('site.teste', ['x' => $opicional_id]);
    }
}
