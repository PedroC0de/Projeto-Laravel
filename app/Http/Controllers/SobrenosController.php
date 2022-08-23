<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobrenosController extends Controller
{
    function sobrenos(){
        return(view('site.sobrenos'));
    }
}
