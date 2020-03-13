<?php

namespace App\Http\Controllers;

use App\PendudukPindah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PendudukPindahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = DB::table('penduduk')
            ->join('detail_kepindahan','penduduk.NIK','=','detail_kepindahan.NIK')
            ->join('banjar', 'penduduk.idBanjar', '=', 'banjar.id')
            ->select('penduduk.*',
                    'banjar.nama as namaBanjar',
                    'detail_kepindahan.alasanPindah',
                    'detail_kepindahan.alamat',
                    'detail_kepindahan.desa',
                    'detail_kepindahan.kecamatan',
                    'detail_kepindahan.kabupaten',
                    'detail_kepindahan.provinsi',
                    'detail_kepindahan.padaTanggal')
            ->orderBy('penduduk.idBanjar', 'ASC')
            ->where('penduduk.statusPenduduk','P')
            ->get();

        return view('operator/kependudukan.pendudukPindah',['penduduk' => $penduduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PendudukPindah  $pendudukPindah
     * @return \Illuminate\Http\Response
     */
    public function show(PendudukPindah $pendudukPindah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PendudukPindah  $pendudukPindah
     * @return \Illuminate\Http\Response
     */
    public function edit(PendudukPindah $pendudukPindah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PendudukPindah  $pendudukPindah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PendudukPindah $pendudukPindah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PendudukPindah  $pendudukPindah
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendudukPindah $pendudukPindah)
    {
        //
    }

    public static function indonesianFormattedDate($date) {
        $dt = new  \Carbon\Carbon($date);
        setlocale(LC_TIME, 'IND');

        return $dt->formatLocalized('%e %B %Y'); // 3 September 2018
    }
}
