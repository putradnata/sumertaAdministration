<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use App\Banjar;
use Illuminate\Support\Facades\DB;
use App\JenisSurat;
use App\PengajuanSurat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function homeOperator()
    {

        //start select banjar
        $banjar = DB::table('banjar')
                    ->get();

        //do | Male
        foreach($banjar as $bjr => $br){
            $valueMale[$bjr] = DB::table('penduduk')
                            ->where('idBanjar',$br->id)
                            ->where('statusPenduduk','=','A')
                            ->where('jenisKelamin','=','L')
                            ->count();
            $labelMale[$bjr] = $br->nama;
        }

        //do | Female
        foreach($banjar as $bjr => $br){
            $valueFemale[$bjr] = DB::table('penduduk')
                            ->where('idBanjar',$br->id)
                            ->where('statusPenduduk','=','A')
                            ->where('jenisKelamin','=','P')
                            ->count();
            $labelFemale[$bjr] = $br->nama;
        }


        //start select penduduk with banjar filter

        foreach($banjar as $bjr => $br){
            $valuePendudukBanjar[$bjr] = DB::table('penduduk')
                                        ->where('idBanjar',$br->id)
                                        ->where('statusPenduduk','=','A')
                                        ->count();
            $labelPendudukBanjar[$bjr] = $br->nama;
        }

        $pendudukBanjarObject = $valuePendudukBanjar;
        $banjarObject = $labelPendudukBanjar;


        //Count with Filter + SUM
        $sumCount = DB::select("
                            SELECT
                            banjar.nama,
                            COUNT(penduduk.idBanjar) as 'jumlahPenduduk'
                            FROM penduduk
                            JOIN banjar
                            ON penduduk.idBanjar = banjar.id
                            GROUP BY banjar.id

                            UNION ALL

                            SELECT
                            'SUM' idBanjar,
                            COUNT(penduduk.idBanjar)
                            FROM penduduk
                            JOIN banjar
                            ON penduduk.idBanjar = banjar.id
                            ");

        //dd($sumCount[3]->jumlahPenduduk);
        //dd($sumCount);
        // $presentaseTK = $sumCount[0]->jumlahPenduduk / $sumCount[3]->jumlahPenduduk * 100;
        // $presentaseSM = $sumCount[1]->jumlahPenduduk / $sumCount[3]->jumlahPenduduk * 100;
        // $presentaseKB = $sumCount[2]->jumlahPenduduk / $sumCount[3]->jumlahPenduduk * 100;
        //dd((int)round($presentaseTK),(int)round($presentaseSM),(int)round($presentaseKB));
        // dd((int)round($presentaseSM));
        // dd((int)round($presentaseKB));

        return view('operator/index')
        ->with('valueMale',json_encode($valueMale))
        ->with('labelMale',json_encode($labelMale))
        ->with('valueFemale',json_encode($valueFemale))
        ->with('labelFemale',json_encode($labelFemale))
        ->with('valuePendudukBanjar',json_encode($valuePendudukBanjar))
        ->with('labelPendudukBanjar',json_encode($labelPendudukBanjar))
        ->with('pendudukBanjarObject',$pendudukBanjarObject)
        ->with('banjarObject',$banjarObject)
        ->with('sumCount',$sumCount);

    }

    public function homePenduduk()
    {
        $getPenduduk = DB::table('penduduk')
                        ->where('NIK',\Auth::user()->NIK)
                        ->first();

        $selectKeluarga = DB::table('penduduk')
                            ->where('noKK',$getPenduduk->noKK)
                            ->get();

        $selectSurat = JenisSurat::all();

        return view('penduduk/index',[
            'keluarga' => $selectKeluarga,
            'surat' => $selectSurat,
            'getPenduduk' => $getPenduduk,
        ]);
    }

    public function fetchData($id){
        $findPenduduk = Penduduk::findOrFail($id);

        $selectPenduduk = DB::table('penduduk')
            ->join('banjar', 'penduduk.idBanjar', '=', 'banjar.id')
            ->select('penduduk.*', 'banjar.nama as namaBanjar')
            ->where('NIK', $id)->get();

        return view('penduduk.fetchData',['fetched'=> $selectPenduduk])->render();
    }

    public static function indonesianFormattedDate($date) {
        $dt = new  \Carbon\Carbon($date);
        setlocale(LC_TIME, 'IND');

        return $dt->formatLocalized('%e %B %Y'); // 3 September 2018
    }
}
