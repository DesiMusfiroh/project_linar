<?php

//menampilkan halaman home untuk user dan admin
Route::group(['middleware' => ['web','auth']], function(){
    Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    if (Auth::user()->level == 2){
        return view('home_maba');
    } else{
        $users['users'] = \App\user::all();
        return view('home_admin');
    }
    });
});

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Layout Admin Panitia

Route::get('/admin', 'AdminController@create');
Route::post('/admin/store', 'AdminController@store');
Route::get('/admin/edit/{id}', 'AdminController@edit');
Route::patch('/admin/update/{id}', 'AdminController@update');

Route::get('/upload_twibbon','TwibbonController@create');
Route::post('/twibbon/store','TwibbonController@store');
Route::get('/twibbon/edit/{id}', 'TwibbonController@edit');
Route::patch('/twibbon/update/{id}', 'TwibbonController@update');

Route::get('/upload_cocarde','CocardeController@create');
Route::post('/cocarde/store','CocardeController@store');
Route::get('/cocarde/edit/{id}', 'CocardeController@edit');
Route::patch('/cocarde/update/{id}', 'CocardeController@update');

Route::get("/lihat_informasi", "InformasiController@show");
Route::get("/informasi", "InformasiController@create");
Route::post("/informasi/store", "InformasiController@store");
Route::get("/informasi/edit/{id}", "InformasiController@edit");
Route::patch("/informasi/update/{id}", "InformasiController@update");
Route::get("/informasi/delete/{id}", "InformasiController@delete");

Route::get('/pembagian_gugus','PendaftaranController@show');

/* Route::get('/pembagian_gugus', function () {
    return view('/pembagian_gugus');
});
*/


// Layout Mahasiswa Baru
Route::get('/dashboard', function () {
    return view('home_maba');
});

Route::get('/mahasiswa', 'MahasiswaController@create');
Route::post('/mahasiswa/store', 'MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::patch('/mahasiswa/update/{id}', 'MahasiswaController@update');

Route::get('/pilih_pkkmb', 'AdminController@index');

Route::get('/pendaftaran/{id}','PendaftaranController@create',  ['$admin_pendaftaran' =>'id']);
Route::post('/pendaftaran/store','PendaftaranController@store');
Route::patch('/pendaftaran/update','PendaftaranController@update');
Route::post('/pendaftaran/delete','PendaftaranController@delete');


Route::get('/data_mahasiswa','PendaftaranController@index');

Route::get('/twibbon/show/{id}', 'TwibbonController@show',  ['$admin_pendaftaran' =>'id']);
Route::get('/twibbon/download/{id}', 'TwibbonController@download');

Route::get('/cocarde/show/{id}', 'CocardeController@show', ['$admin_pendaftaran' =>'id']);
Route::get('/cocarde/download/{id}', 'CocardeController@download');

Route::get("/informasi/show_maba/{id}", "InformasiController@show_maba",  ['$admin_pendaftaran' =>'id']);



