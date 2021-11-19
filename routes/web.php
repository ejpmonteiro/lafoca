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
//     return view('welcome');
// });

$this->group(['namespace' => 'Site'], function() {
    $this->get('/', 'HomeController@index')->name('pages.home');

    $this->get('sobre', 'AboutController@index')->name('pages.sobre');

    $this->get('noticias', 'NewsController@index')->name('pages.noticias');
    $this->get('noticias/{id}', 'NewsController@getNews')->name('pages.noticia_completa');

    $this->get('pesquisas', 'ResearchesController@index')->name('pages.pesquisas');
    $this->get('pesquisas/{id}', 'ResearchesController@getResearch')->name('pages.visualizar_pesquisa');
    
    $this->get('artigos', 'ArticlesController@index')->name('pages.artigos');
    $this->get('artigos/{id}', 'ArticlesController@getPublication')->name('pages.visualizar_artigo');
    
    $this->get('cursos', 'CoursesController@index')->name('pages.cursos');
    $this->get('cursos/{id}', 'CoursesController@getCourse')->name('pages.visualizar_curso');

    $this->get('equipe', 'TeamController@index')->name('pages.equipe');

    $this->get('contato', 'ContactController@index')->name('pages.contato');

    $this->post('contato', 'ContactController@send')->name('contato.faleconosco');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
