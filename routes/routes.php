<?php
use Src\Route as Route;

Route::get('/', 'indexController@index');
Route::get('/{id}', 'indexController@leitor');
Route::get('/admin/noticias', 'noticiasController@index');
Route::post('/admin/noticias', 'noticiasController@index');