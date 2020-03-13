<?php

namespace App\Http\Controllers;

use App\Banjar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BanjarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banjar = Banjar::all();

        return view('operator/banjar.index',['banjar' => $banjar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banjar = new Banjar();

        $request =  (object) $banjar->getDefaultValues();

        return view('operator/banjar.form', [
            'request' => $request
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
            'namaBanjar' => $request->namaBanjar,
            'alamatBanjar' => $request->alamatBanjar,
            'keteranganBanjar' => $request->keteranganBanjar,
        ];

        $message = [
            'namaBanjar.required' => 'Nama Banjar Wajib Diisi',
            'alamatBanjar.required' => 'Alamat Banjar Wajib Diisi',
        ];

        $validate = Validator::make($data,[
            'namaBanjar' => 'required',
            'alamatBanjar' => 'required',
        ],$message);

        if($validate->fails()){
            return redirect('operator/banjar/create')
                    ->withErrors($validate)
                    ->withInput();
        }

        $insertBanjar = Banjar::create([
            'nama' => $request->namaBanjar,
            'alamat' => $request->alamatBanjar,
            'keterangan' => $request->keteranganBanjar,
        ]);

        return redirect('operator/banjar')->with('success','Data Banjar Berhasil Tersimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banjar  $banjar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $findBanjar = Banjar::findOrFail($id)->first();

        $findBanjar = Banjar::where('id',$id)->get();

        // var_dump($findBanjar);
        return view('operator/banjar.dataModal', ['selectBanjar' => $findBanjar])->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banjar  $banjar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banjarFind = Banjar::findOrFail($id);

        $request = (object) $banjarFind;

        return view('operator/banjar.form', ['banjarFind' => $banjarFind, 'request' => $request]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banjar  $banjar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banjar $banjar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banjar  $banjar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banjar $banjar)
    {
        //
    }
}
