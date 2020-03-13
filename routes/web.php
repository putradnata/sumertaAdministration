<?php
/* With Middleware */
Route::group(['middleware' => 'operator'], function () {
    //Prefix Route
    Route::group(['prefix' => 'operator'], function () {
        // Operator
        Route::get('/', 'HomeController@homeOperator')->name('operator.index');

        // Kependudukan
        Route::resource('kependudukan', 'PendudukController');

        //Penduduk Pindah
        Route::resource('penduduk-pindah', 'PendudukPindahController');

        // Banjar
        Route::resource('banjar', 'BanjarController');

        // Profile Operator
        Route::get('/profile','ProfileController@profilPenduduk')->name('profileOperator');

        //Website Manager
        Route::resource('/manajer-website','WebsiteContentController');

    });
});

Route::group(['middleware' => 'penduduk'], function () {
    //Prefix Route
    Route::group(['prefix' => 'penduduk'], function () {
        // Penduduk
        Route::get('/', 'HomeController@homePenduduk')->name('penduduk.index');

        // Profile Penduduk
        Route::get('/profile','ProfileController@profilPenduduk')->name('profilePenduduk');

        //test Ajax
        Route::get('/dataKeluarga','ProfileController@testAjax')->name('checkAjax');

        //fetchDataPenduduk
        Route::get('/fetchData/{id}','HomeController@fetchData');
    });
});

/* End With Middleware */

// Route::get('/', function () {
//     return view('welcome');
// });

//Website

Auth::routes();

// Route::get('/', 'HomeController@index');

Route::get('/','WebsiteController@index');

Route::get('/home', 'HomeController@index')->name('home');

/* Staging Route  */
Route::get('/staging/test', function(){
    return view('layouts.base');
});

Route::get('/staging/surat',function(){
    return view('layouts.surat');
});
