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



Route::get('/', 'HomeController@index');

Route::get('/verifyemail/{token}', 'cadastroController@verify');

//Only on development
Route::get('/html/{id}', function ($id) {
    return view('html.'.$id);
});

Route::group(['prefix' => '/cadastro'], function(){

	Route::get('/', 'cadastroController@view')->name('cadastro.view');

	Route::post('store', 'cadastroController@store')->name('cadastro.store');	

});

Route::group(['middleware' => 'auth'], function(){

	Route::group(['prefix' => '/disciplinas'], function(){
		
		Route::get('/{type_disciplinas}',['uses' => 'disciplinasController@view'])->name('disciplinas.view');

		Route::get('/disciplina/{id}', ['uses' => 'disciplinaController@view'])->name('disciplina.view');

	});

	Route::group(['prefix' => '/atividade'], function(){

		Route::get('/{id_disciplina}/{id}',['uses' => 'atividadeController@view'])->name('atividade.view');

		Route::get('/cadastrar', 'atividadeController@create')->name('atividade.create');

		Route::post('/store', 'envioController@store')->name('envio.store');

	});
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
