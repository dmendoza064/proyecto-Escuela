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
//rutas de front
Route::get('/',
	['as'=>'frontend.index',
	 'uses' => 'FrontController@index'
]);

Route::get('Categoria/{nombre}',[
	'uses' => 'FrontController@Categoriafornt',
	'as'   => 'frontend.busqueda.CategoriaBusqueda'
]);
Route::get('Tags/{nombre}',[
	'uses' => 'FrontController@Tagfornt',
	'as'   => 'frontend.busqueda.TagBusqueda'
]);
Route::get('Articulos/{titulo}',
	['uses' => 'FrontController@vistaArticulo',
	 'as'	=> 'frontend.vista.articulo']
);
//rutas del admin

Route::group(['prefix' => 'admin','middleware' => ['auth','admin']], function()
{
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as'   => 'admin.users.destroy']);
	
	Route::resource('categorias','CategoriasController');
	Route::get('categorias/{id}/destroy', [
		'uses' => 'CategoriasController@destroy',
		'as'   => 'categorias.destroy']);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as'   => 'tags.destroy']);
	
	Route::resource('Articulo','ArticuloController');
	Route::get('Articulo/{id}/destroy', [
		'uses' => 'ArticuloController@destroy',
		'as'   => 'Articulo.destroy']);
	Route::get('imagen', [
		'uses' => 'ImagenesController@index',
		'as'   => 'imagen.index']);

	Route::resource('Prue','prueba');
	
	Route::get('/', function () {
    return redirect('/login');
	});

	Route::get('/home', 'HomeController@index')->name('home');
});
Auth::routes();

	
//login






