<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//client
Route::view('layout','layout');
Route::view('confirm','confirm');
Route::view('hed','hed');
Route::view('gallary','gallary');

//show category wise product here

Route::get('menu','MenuController@display');
Route::get('dis/catname={id}','MenuController@show');
Route::get('dis/show_product/{id}','MenuController@show_product');

//cart routes are here----------------

Route::POST('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart','CartController@update_cart');

//order routes....
Route::get('/order','OrderController@orderNow');
Route::POST('/orderplace','OrderController@order_place');
Route::get('/myorder','OrderController@myOrder');
Route::get('/order-details/{id}','OrderController@order_details');
Route::get('/cancel_order/{order_id}','OrderController@cancel_order');


//contact route....
Route::get('/contact','ContactController@index');
Route::POST('/addcontact','ContactController@store');




// admin
Route::view('common','admin.common');


//Backend routes............................
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');
// Route::post('admin/admin-dashboard','AdminController@dashboard');

//category

Route::get('category','CategoryController@index');
Route::get('addcat','CategoryController@create');
Route::POST('store','CategoryController@store');
Route::get('deletecat/{id}','CategoryController@destroy');
Route::get('editcat/{id}','CategoryController@edit');
Route::resource('catcon', 'CategoryController');

Route::POST('test','AdminloginController@logincheck');

//product
Route::get('product','ProductController@index');
Route::get('addproduct','ProductController@create');
Route::POST('product_store','ProductController@store');
Route::get('deleteproduct/{id}','ProductController@destroy');
Route::get('editproduct/{id}','ProductController@edit');
Route::POST('update-product/{id}','ProductController@update');


//order

Route::get('orderview','OrderController@view_order');
Route::get('orderviewmap/{id}','OrderController@view_orderMap');
Route::get('/unactive_order/{order_id}','OrderController@unactive_order');
Route::get('/active_order/{order_id}','OrderController@active_order');



//register user detail
Route::get('user_detail','SuperAdminController@user_detail');

//contact
Route::get('contactdetail','ContactController@show');
Route::get('deletecontact/{id}','ContactController@destroy');

