<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstaticasController extends Controller
{
    public function nosotros() {
        return view('estaticas.nosotros');
    }
}
