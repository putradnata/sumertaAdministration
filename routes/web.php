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

        //Jenis surat
        Route::resource('data-surat','JenisSuratController');

        //Incoming Letter
        Route::get('surat-masuk','OperatorLetterActivity@incomingLetter')->name('incomingLetter.incoming');

        //letter management
            //operator Process
            Route::get('surat-masuk/op/{id}','OperatorLetterActivity@OperatorProcess')->name('operator.process');
            //kelian banjar dinas process
            Route::get('surat-masuk/kb/{id}','OperatorLetterActivity@KelianBanjarProcess')->name('kelian.process');
            //Kepala DEsa Process
            Route::get('surat-masuk/kd/{id}','OperatorLetterActivity@KepalaDesaProcess')->name('kades.process');
            //Completed process
            Route::get('surat-masuk/cm/{id}','OperatorLetterActivity@CompletedProcess')->name('process.completed');

        //agenda
        Route::get('agenda-surat','OperatorLetterActivity@agenda')->name('agenda-surat');

        //print
        Route::get('/cetak-surat/{id}','OperatorLetterActivity@print_PDF')->name('print-letter');

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

        //pengajuan surat
        Route::resource('pengajuan-surat','PengajuanSuratController');

        Route::get('/data-surat/lacak-surat','PendudukLetterActivity@LetterTracking')->name('letterTracking.tracking');

        //fetchSurat
        Route::get('/data-surat/fetchData/{id}','PendudukLetterActivity@LetterFilter');

        //letter histroy
        Route::get('/data-surat/jurnal-surat','PendudukLetterActivity@letterHistory')->name('letterHistory');
    });
});

/* End With Middleware */


//Website

Auth::routes();

// // Route::get('/', 'HomeController@index');

Route::get('/','WebsiteController@index');

Route::get('/home', 'HomeController@index')->name('home');

/* Staging Route  */
/*
all testing will put here
*/

// Route::get('/staging/penduduk-pindah',function(){
//     return view('operator/kependudukan/penduduk-pindah.form');
// });
