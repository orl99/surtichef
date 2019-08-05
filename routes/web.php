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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/Pedidos', 'OrderController@pedido')->name('pedido');
Route::view('/Client/Pedidos', 'client.pedido')->name('client.pedido');
Route::get('/Products/{id}','ProductController@show');
////////Carritos de compra
Route::post('/Cart','CartDetailController@store');
Route::post('/CartMultiStore','CartDetailController@multiStore');
Route::delete('/Cart','CartDetailController@destroy');
////////orden del cliente
Route::post('/Order','CartController@update');
////////vistas de categorias y clientes
Route::get('/Categorias/','CategoriesClientController@list');
Route::get('/Categorias/{category}','CategoriesClientController@show');
//////information personal
Route::view('/Client/Mis-Datos', 'client.info')->name('info');

//Favoritos
Route::get('/favoritos', 'FavoritosController@index')->name('favoritos');
Route::post('/favoritos','FavoritosController@insert')->name('favoritos');

Route::middleware(['auth','admin'])->group(function () {
      Route::get('/Admin', 'DashboardController@dashboard')->name('dashboard');
      ///productos/agregar/modificar/eliminar
      Route::get('/Admin/Product', 'Admin\ProductController@product')->name('product');//listados
      Route::get('/Admin/Product/create', 'Admin\ProductController@create');//create
      Route::post('/Admin/Product/store', 'Admin\ProductController@store');//gardar db
      Route::get('/Admin/Product/{id}/edit', 'Admin\ProductController@edit');//editar formulario
      Route::post('/Admin/Product/{id}/edit', 'Admin\ProductController@update');//actualizarlo
      Route::get('/Admin/Product/{id}/delete', 'Admin\ProductController@destroy');//eliminar producto

      ///categorias/agregar/modificar/eliminar
      Route::get('/Admin/Category', 'CategoryController@category')->name('category');//listados
      Route::get('/Admin/Category/create', 'CategoryController@create');//create
      Route::post('/Admin/Category/store', 'CategoryController@store');//gardar db
      Route::get('/Admin/Category/{id}/edit', 'CategoryController@edit');//editar formulario
      Route::post('/Admin/Category/{id}/edit', 'CategoryController@update');//actualizarlo
      Route::get('/Admin/Category/{id}/delete', 'CategoryController@destroy');//eliminar producto

      //////lista de clientes
      Route::get('/Admin/Client/list', 'ClientController@list')->name('client');

      ///////Ordenes de clientes
      //Route::post('Admin/Order/','CartController@show');
});
