<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function funcao(){
      //gerencia dados aqui.

      return view('welcome');
    }

    public function add(Request $request){
      // dd($request);
      $nome=$request->input('firstname');
      $sobrenome=$request->input('lastname');
      dd($nome,$sobrenome);
    }

    public function parametrizando($n1,$n2){
      dd($n1, $n2);
    }
};
