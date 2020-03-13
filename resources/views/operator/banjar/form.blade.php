@extends('layouts.base')

@section('addressTitle','Input Data Banjar')

@section('contentHere')

<div class="card shadow mb-4">
    <div class="card-header border-0">
        <div class="custom-title-wrap bar-primary">
            <div class="custom-title">Data Banjar</div>
            <div class="custom-post-title">Desa Sumerta Kaja</div>
        </div>
        @if ($errors->any())
                <div class="alert alert-danger errorAlert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
        @endif
    </div>
    <div class="card-body">
        @if(!isset($banjarFind->id))
            <form method="POST" action="{{ route('banjar.store') }}">
        @else
            <form method="POST" action="{{ route('banjar.update', $banjarFind->id) }}">
                @method('put')
        @endif
                @csrf
                <div class="form-group">
                    <label for="namaBanjar">Nama</label>
                    <input class="form-control" id="nama" name="namaBanjar" type="text" placeholder="Nama Banjar" value="{{ old('namaBanjar', $request->nama) }}">
                </div>
                <div class="form-group">
                    <label for="alamatBanjar">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamatBanjar" placeholder="Alamat Banjar">{{ old('alamatBanjar', $request->alamat) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="keteranganBanjar">Keterangan</label>
                    <input class="form-control" id="keteranganBanjar" name="keteranganBanjar" placeholder="Keterangan" value="{{ old('keteranganBanjar', $request->keterangan) }}">
                </div>
                <button class="btn btn-secondary" type="reset" data-dismiss="modal">Ulang</button>
                <button class="btn btn-success btn-submit" type="submit">Simpan</button>
            </form>
    </div>
</div>




@endsection

@section('scriptPlace')

@endsection
