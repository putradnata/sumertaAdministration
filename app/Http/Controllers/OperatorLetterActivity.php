<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class OperatorLetterActivity extends Controller
{
    public function incomingLetter(){
        //current date
        $today = \Carbon\Carbon::now()->format('Y-m-d');

        $incomingLetter = DB::table('pengajuan_surat')
                            ->join('penduduk','pengajuan_surat.NIK','=','penduduk.NIK')
                            ->join('jenis_surat','pengajuan_surat.idJenisSurat','=','jenis_surat.id')
                            ->join('banjar','pengajuan_surat.idBanjar','=','banjar.id')
                            ->select(
                                'pengajuan_surat.noSurat',
                                'penduduk.nama as Pemohon',
                                'banjar.nama as Banjar',
                                'jenis_surat.jenis as JenisSurat',
                                'pengajuan_surat.created_at as tanggalMengajukan',
                                'pengajuan_surat.status as statusSurat',
                            )
                            ->where('pengajuan_surat.created_at','like','%'.$today.'%')
                            ->orderByDesc('pengajuan_surat.created_at')
                            ->get();

        //dd($incomingLetter->toSql(),$incomingLetter->getBindings());

        // dd($incomingLetter);

        return view('operator/manajemen-surat.index',[
            'incomingLetter' => $incomingLetter,
        ]);
    }

    public function OperatorProcess($id){
        $operatorProcess = DB::table('pengajuan_surat')
                                    ->where('noSurat',$id)
                                    ->update(['status' => 'D']);

        if($operatorProcess){
            return redirect('operator/surat-masuk')->with('success','Status Berhasil Diperbaharui');
        }else{
            return redirect('operator/surat-masuk')->with('error','Terjadi Kesalahan');
        }
    }

    public function KelianBanjarProcess($id){
        $operatorProcess = DB::table('pengajuan_surat')
                                    ->where('noSurat',$id)
                                    ->update(['status' => 'KBD']);

        if($operatorProcess){
            return redirect('operator/surat-masuk')->with('success','Status Berhasil Diperbaharui');
        }else{
            return redirect('operator/surat-masuk')->with('error','Terjadi Kesalahan');
        }
    }

    public function KepalaDesaProcess($id){
        $operatorProcess = DB::table('pengajuan_surat')
                                    ->where('noSurat',$id)
                                    ->update(['status' => 'KD']);

        if($operatorProcess){
            return redirect('operator/surat-masuk')->with('success','Status Berhasil Diperbaharui');
        }else{
            return redirect('operator/surat-masuk')->with('error','Terjadi Kesalahan');
        }
    }

    public function CompletedProcess($id){
        $operatorProcess = DB::table('pengajuan_surat')
                                    ->where('noSurat',$id)
                                    ->update(['status' => 'S']);

        if($operatorProcess){
            return redirect('operator/surat-masuk')->with('success','Status Berhasil Diperbaharui');
        }else{
            return redirect('operator/surat-masuk')->with('error','Terjadi Kesalahan');
        }
    }

    public static function indonesianFormattedDate($date) {
        $dt = new  \Carbon\Carbon($date);
        setlocale(LC_TIME, 'IND');

        return $dt->formatLocalized('%e %B %Y'); // 3 September 2018
    }
}
