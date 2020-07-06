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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('items.tablesatu');
});

Route::get('/data_tables',function(){
    return view('items.data_tables');
});
Route::get('/items/create', 'ItemController@create'); //menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items/', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id
Route::get('/items/{id}/edit','ItemController@edit'); //menampilkan form untuk edit items
Route::put('/items/{id}','ItemController@update'); //menyimpan perubahan dari edit
Route::delete('/items/{id}','ItemController@destroy'); //menghapus data dengan id

?>
