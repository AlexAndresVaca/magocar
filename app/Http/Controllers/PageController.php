<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{   
    public function index(){
        return view('welcome');
    }
    //
    public function lineas(){
        return view('public.lineas');
    }
    /* */
    public function producto(){
        return view('public.producto');
    }
    /* */
    public function quienes_somos(){
        return view('public.quienes_somos');
    }
}
