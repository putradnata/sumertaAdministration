<?php

namespace App\Http\Controllers;

use App\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class PengajuanSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomingLetter = PengajuanSurat::where('status','-1')
                            ->get();

        dd($incomingLetter);
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
        //get nik
        $nik = $request->pemohon;

        //find penduduk
        $findPenduduk = DB::table('penduduk')
                        ->where('NIK',$nik)
                        ->first();

        //find kelian
        $findKelian = DB::table('kelian_banjar_dinas')
                                ->where('idBanjar',$findPenduduk->idBanjar)
                                ->first();

        //get current month
        $now = Carbon::now()->toDateString();
        $m = explode('-',$now);
        $month = $m[1];

        //Normal number to Roman number conversion
        $normalNumber = array('01','02','03','04','05','06','07','08','09','10','11','12');
        $romanNumber = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');

        $conversion = str_ireplace($normalNumber,$romanNumber,$month);

        //get banjar's initial
        if($findKelian->idBanjar == '1'){
            $banjarInitial = 'TK';
        }else if($findKelian->idBanjar == '2'){
            $banjarInitial = 'SM';
        }else if($findKelian->idBanjar == '3'){
            $banjarInitial = 'KB';
        }else if($findKelian->idBanjar == '4'){
            $banjarInitial = 'PK';
        }else if($findKelian->idBanjar == '5'){
            $banjarInitial = 'PND';
        }else if($findKelian->idBanjar == '6'){
            $banjarInitial = 'LBH';
        }

        //count how many letter in database
        $findLatestLetter = DB::table('pengajuan_surat')
                            ->select('noSurat',DB::raw('MAX(noSurat)'))
                            ->where('noSurat','like','%' .$banjarInitial. '%')
                            ->where('noSurat','like','%/' .$conversion. '/%')
                            ->groupBy('noSurat')
                            ->orderByDesc('noSurat')
                            ->first();
        $noUrut = substr($findLatestLetter->noSurat,0,3);
        $maxid=explode("/",$findLatestLetter->noSurat);
        $noUrut = $maxid[0];
        $noUrut++;

        $newLetterNumber = sprintf('%03s',$noUrut).'/'.$banjarInitial.'/'.$conversion.'/'.$m[0];

        $data = [
            'noSurat' => $newLetterNumber,
            'NIK' => $nik,
            'idJenisSurat' => $request->suratDiajukan,
            'idKelianDinas' => $findKelian->id,
            'status' => '-1',
        ];

        // dd($noUrut);

        //get toSql with the value
        // dd($findLatestLetter->toSql(), $findLatestLetter->getBindings());

        $insert = PengajuanSurat::create($data);

        if($insert){
            return redirect('penduduk')->with('success','Surat Berhasil Diajukan');
        }else{
            return redirect('penduduk')->with('error','Terjadi Kesalahan Saat Mengajukan Surat');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function show(PengajuanSurat $pengajuanSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function edit(PengajuanSurat $pengajuanSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengajuanSurat $pengajuanSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PengajuanSurat  $pengajuanSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengajuanSurat $pengajuanSurat)
    {
        //
    }
}
