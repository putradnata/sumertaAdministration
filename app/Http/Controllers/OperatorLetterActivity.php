<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class OperatorLetterActivity extends Controller
{
    public function incomingLetter(){
        $incomingLetter = DB::table('pengajuan_surat')
                            ->join('penduduk','pengajuan_surat.NIK','=','penduduk.NIK')
                            ->join('jenis_surat','pengajuan_surat.idJenisSurat','=','jenis_surat.id')
                            ->join('banjar','pengajuan_surat.idBanjar','=','banjar.id')
                            ->select(
                                'pengajuan_surat.noSurat',
                                'penduduk.nama as Pemohon',
                                'banjar.nama as Banjar',
                                'jenis_surat.jenis as JenisSurat',
                                'pengajuan_surat.created_at as tanggalMengajukan'
                            )
                            ->where('pengajuan_surat.status','-1')
                            ->get();

        // dd($incomingLetter);

        return view('operator/manajemen-surat.index',[
            'incomingLetter' => $incomingLetter,
        ]);
    }

    public function letterTracking(){

    }

    public static function indonesianFormattedDate($date) {
        $dt = new  \Carbon\Carbon($date);
        setlocale(LC_TIME, 'IND');

        return $dt->formatLocalized('%e %B %Y'); // 3 September 2018
    }
}
