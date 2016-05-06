<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'ProdutoController@lista');
Route::get('/tarefas/mostra/{id}', 'ProdutoController@mostra')->where('id','[0-9]+');
Route::get('/tarefas/novo', 'ProdutoController@novo');
Route::get('/tarefas/adiciona', 'ProdutoController@adiciona');
Route::post('/tarefas/adicionado', 'ProdutoController@adiciona');
