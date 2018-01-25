<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome')->with('name','( ͡° ͜ʖ ͡°)');
// });

Route::get('/donkey','MyController@funcao');

Route::get('/view1', function () {
    return view('pages.view1');
});

Route::get('/{x}/{y}', 'MyController@parametrizando');

Route::get('/view2/{id}', function ($id) {
    return "O serviço do ".$id." é muito bom.<br><br>Gostou?<a href='".url('view1')."'> Esse é o contato dele.</a>";
});

Route::get('/tele/{pessoa}/{phone}', function($pessoa,$phone) {
  return "O serviço do ".$pessoa." é muito bom.<br><br>Gostou?<a href='".url('view1')."'> Esse é o telefone dele: ".$phone.".</a>";
});

Route::get('/tarefa/{nome}', function ($nome){
  return "O Nome: ".$nome;
});

Route::get('/tarefa/{nome}/{cpf}', function ($nome, $cpf){
  return "O Nome: ".$nome."<br>CPF: ".$cpf;
});

Route::get('/tarefa/{nome}/{cpf}/{rg}', function ($nome, $cpf, $rg){
  return "O Nome: ".$nome."<br>CPF: ".$cpf."<br>RG: ".$rg;
});

Route::get('/tarefa/{nome}/{cpf}/{rg}/{cep}', function ($nome, $cpf, $rg, $cep){
  return "O Nome: ".$nome."<br>CPF: ".$cpf."<br>RG: ".$rg."<br>CEP: ".$cep;
});

Route::get('/parametros/{p1}/{p2}', function($p1, $p2){
  return view('welcome', ['texto1'=>$p1, 'texto2'=>$p2]);
});

Route::post('/rotinha', 'MyController@add')->name('highway');
