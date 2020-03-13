<?php

namespace App\Http\Controllers;

use App\Penduduk;
use App\Banjar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = DB::table('penduduk')
            ->join('banjar', 'penduduk.idBanjar', '=', 'banjar.id')
            ->select('penduduk.*', 'banjar.nama as namaBanjar')
            ->orderBy('penduduk.idBanjar', 'ASC')
            ->get();

        return view('operator/kependudukan.index',['penduduk' => $penduduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banjar = Banjar::all();

        $penduduk = new Penduduk();

        $request =  (object) $penduduk->getDefaultValues();

        return view('operator/kependudukan.form', [
            'request' => $request,
            'banjar' => $banjar
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'nikpenduduk' => $request->nikpenduduk,
            'noKK' => $request->noKK,
            'namaLengkap' => $request->namaLengkap,
            'jenisKelamin' => $request->jenisKelamin,
            'statusPerkawinan' => $request->statusPerkawinan,
            'statusKeluarga' => $request->statusKeluarga,
            "tempatLahir" => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'namaAyah' =>  $request->namaAyah,
            'namaIbu' => $request->namaIbu,
            'agama' => $request->agama,
            'pendidikanTerakhir' => $request->pendidikanTerakhir,
            'pekerjaan' => $request->pekerjaan,
            'kebutuhanKhusus' => $request->kebutuhanKhusus,
            'pendidikanLainnya' => $request->pendidikanLainnya,
            'alamatPenduduk' => $request->alamatPenduduk,
            'banjar' => $request->banjar
        ];

        $message = [
            'nikpenduduk.required' => 'Nomor Induk Kependudukan Wajib Diisi',
            'noKK.required' => 'Nomor KK Wajib Diisi',
            'namaLengkap.required' => 'Nama Lengkap Wajib Diisi',
            'jenisKelamin.required' => 'Jenis Kelamin Wajib Diisi',
            'statusPerkawinan.required' => 'Status Perkawinan Wajib Diisi',
            'statusKeluarga.required' => 'Status Keluarga Wajib Diisi',
            'tempatLahir.required' => 'Tempat Lahir Wajib Diisi',
            'tanggalLahir.required' => 'Tanggal Lahir Wajib Diisi',
            'namaAyah' => 'Nama Ayah Wajib Diisi',
            'namaIbu' => 'Nama Ibu Wajib Diisi',
            'agama.required' => 'Agama Wajib Diisi',
            'pendidikanTerakhir.required' => 'Pendidikan Terakhir Wajib Diisi',
            'pekerjaan.required' => 'Pekerjaan Wajib Diisi',
            'alamatPenduduk.required' => 'Alamat Wajib Diisi',
            'banjar.required' => 'Banjar Wajib Diisi',
        ];

        $validate = Validator::make($data, [
            'nikpenduduk' => 'required | string | max:16',
            'noKK' => 'required | string| max:16',
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'statusPerkawinan' => 'required',
            'statusKeluarga' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'agama' => 'required',
            'pendidikanTerakhir' => 'required',
            'pekerjaan' => 'required',
            'alamatPenduduk' => 'required',
            'banjar' => 'required',
        ], $message);

        if ($validate->fails()) {
            return redirect('operator/kependudukan/create')
                ->withErrors($validate)
                ->withInput();
        }

        $penduduk = new Penduduk;

        if($request->pendidikanLainnya == null){
            $insertPenduduk = Penduduk::create([
                'NIK' => $request->nikpenduduk,
                'noKK' => $request->noKK,
                'nama' => $request->namaLengkap,
                'jenisKelamin' => $request->jenisKelamin,
                'statusPerkawinan' => $request->statusPerkawinan,
                'kedudukanKeluarga' => $request->statusKeluarga,
                'tempatLahir' => $request->tempatLahir,
                'tanggalLahir' => $request->tanggalLahir,
                'namaAyah' =>  $request->namaAyah,
                'namaIbu' => $request->namaIbu,
                'agama' => $request->agama,
                'pekerjaan' => $request->pekerjaan,
                'kebutuhanKhusus' => $request->kebutuhanKhusus,
                'pendidikanTerakhir' => $request->pendidikanTerakhir,
                'alamatLengkap' => $request->alamatPenduduk,
                'idBanjar' => $request->banjar
            ]);
        }else {
            $insertPenduduk = Penduduk::create([
                'NIK' => $request->nikpenduduk,
                'noKK' => $request->noKK,
                'nama' => $request->namaLengkap,
                'jenisKelamin' => $request->jenisKelamin,
                'statusPerkawinan' => $request->statusPerkawinan,
                'kedudukanKeluarga' => $request->statusKeluarga,
                'tempatLahir' => $request->tempatLahir,
                'tanggalLahir' => $request->tanggalLahir,
                'namaAyah' =>  $request->namaAyah,
                'namaIbu' => $request->namaIbu,
                'agama' => $request->agama,
                'pekerjaan' => $request->pekerjaan,
                'kebutuhanKhusus' => $request->kebutuhanKhusus,
                'pendidikanTerakhir' => $request->pendidikanLainnya,
                'alamatLengkap' => $request->alamatPenduduk,
                'idBanjar' => $request->banjar
            ]);
        }

        return redirect('operator/kependudukan')->with('success', 'Data Penduduk Tersimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findPenduduk = Penduduk::findOrFail($id);

        $selectPenduduk = DB::table('penduduk')
            ->join('banjar', 'penduduk.idBanjar', '=', 'banjar.id')
            ->select('penduduk.*', 'banjar.nama as namaBanjar')
            ->where('NIK', $id)->get();

        return view('operator/kependudukan.dataModal',['testModal'=> $selectPenduduk])->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendudukFind = Penduduk::findOrFail($id);

        $banjar = Banjar::all();

        $request = (object) $pendudukFind;

        return view('operator/kependudukan.form', [
            'pendudukFind' => $pendudukFind,
            'request' => $request,
            'banjar' => $banjar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {

        if($request->pendidikanLainnya == null){
            $updatePenduduk = Penduduk::where('NIK',$request->nikpenduduk)
                ->update([
                    'NIK' => $request->nikpenduduk,
                    'noKK' => $request->noKK,
                    'nama' => $request->namaLengkap,
                    'jenisKelamin' => $request->jenisKelamin,
                    'statusPerkawinan' => $request->statusPerkawinan,
                    'kedudukanKeluarga' => $request->statusKeluarga,
                    'tempatLahir' => $request->tempatLahir,
                    'tanggalLahir' => $request->tanggalLahir,
                    'namaAyah' =>  $request->namaAyah,
                    'namaIbu' => $request->namaIbu,
                    'agama' => $request->agama,
                    'pekerjaan' => $request->pekerjaan,
                    'kebutuhanKhusus' => $request->kebutuhanKhusus,
                    'pendidikanTerakhir' => $request->pendidikanTerakhir,
                    'alamatLengkap' => $request->alamatPenduduk,
                    'idBanjar' => $request->banjar
                ]);
        }else {
            $updatePenduduk = Penduduk::where('NIK',$request->nikpenduduk)
                ->update([
                    'NIK' => $request->nikpenduduk,
                    'noKK' => $request->noKK,
                    'nama' => $request->namaLengkap,
                    'jenisKelamin' => $request->jenisKelamin,
                    'statusPerkawinan' => $request->statusPerkawinan,
                    'kedudukanKeluarga' => $request->statusKeluarga,
                    'tempatLahir' => $request->tempatLahir,
                    'tanggalLahir' => $request->tanggalLahir,
                    'namaAyah' =>  $request->namaAyah,
                    'namaIbu' => $request->namaIbu,
                    'agama' => $request->agama,
                    'pekerjaan' => $request->pekerjaan,
                    'kebutuhanKhusus' => $request->kebutuhanKhusus,
                    'pendidikanTerakhir' => $request->pendidikanLainnya,
                    'alamatLengkap' => $request->alamatPenduduk,
                    'idBanjar' => $request->banjar
                ]);
        }

        return redirect('operator/kependudukan')->with('success', 'Data Penduduk Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public static function indonesianFormattedDate($date) {
        $dt = new  \Carbon\Carbon($date);
        setlocale(LC_TIME, 'IND');

        return $dt->formatLocalized('%e %B %Y'); // 3 September 2018
    }

}
