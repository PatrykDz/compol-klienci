<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Klient;


class KlienciController extends Controller
{
    
    public function index(){
        $klienci = Klient::all();
        return $klienci;
    }
    
    
    
    public function create(){
        return view('klienci/create');
    }
    
    
}
