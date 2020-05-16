@extends('layouts.base')

@section('addressTitle','Dashboard Penduduk')

@section('contentHere')
<div class="row">
    <!-- Ajukan Surat -->
    <div class="col-xl-6 col-md-6">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Pengajuan Surat Surat</div>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success successAlert">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @elseif(Session::has('error'))
                    <div class="alert alert-success errorAlert">
                        <p>{{ Session::get('error') }}</p>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <p class="text-muted">Silahkan ajukan surat melalui form berikut.</p>
                <form method="POST" action="{{ route('pengajuan-surat.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="pemohon">Pemohon</label>
                        <select class="form-control" id="pemohon" name="pemohon">
                            @foreach ($keluarga as $klrg)
                                <option value="{{ $klrg->NIK }}">{{ $klrg->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="fetched-data">

                    </div>
                    <div class="form-group">
                        <label for="suratDiajukan">Surat yang Diajukan</label>
                        <select class="form-control" id="suratDiajukan" name="suratDiajukan">
                            @foreach ($surat as $jenisSurat)
                                <option value="{{ $jenisSurat->id }}">{{ $jenisSurat->jenis }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="detailUsaha">
                        <div class="form-group">
                            <label for="namaUsaha">Nama Usaha</label>
                            <input class="form-control" id="namaUsaha" name="namaUsaha" type="text">
                        </div>

                        <div class="form-group">
                            <label for="jenisUsaha">Jenis Usaha</label>
                            <input class="form-control" id="jenisUsaha" name="jenisUsaha" type="text">
                        </div>

                        <div class="form-group">
                            <label for="alamatUsaha">Alamat Usaha</label>
                            <input class="form-control" id="alamatUsaha" name="alamatUsaha" type="text">
                        </div>

                        <div class="form-group">
                            <label for="nomorTeleponUsaha">Nomor Telepon</label>
                            <input class="form-control" id="nomorTeleponUsaha" name="nomorTeleponUsaha" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Fotokopi Kartu Keluarga (KK)</label>
                        <input type="file" class="form-control-file" id="fileKK" name="fileKK">
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-purple">Ajukan</button>
                        <button type="reset" class="btn btn-outline-secondary reset">Batalkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <!-- Status Surat -->
    <div class="col-xl-6 col-md-6">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-danger">
                    <div class="custom-title">Status Surat</div>
                    <div class=" widget-action-link">

                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-unstyled base-timeline activity-timeline">
                    @if ($letterTracking == null)
                        <li class="">
                            Saat ini belum ada surat yang diajukan.
                        </li>
                    @elseif($letterTracking->status == '-1')
                        @include('penduduk/tracking-components.delivered')
                    @elseif($letterTracking->status == 'D')
                        @include('penduduk/tracking-components.operator-received')
                    @elseif($letterTracking->status == 'KBD')
                        @include('penduduk/tracking-components.kelian-process')
                    @elseif($letterTracking->status == 'KD')
                        @include('penduduk/tracking-components.kepala-desa-process')
                    @elseif($letterTracking->status == 'S')
                        @include('penduduk/tracking-components.completed')
                    @endif
                </ul>
            </div>
        </div>
    </div> --}}
</div>
@endsection

@section('scriptPlace')
    {{-- init default view --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $("#detailUsaha").attr('hidden',true);
        });
    </script>

    {{-- init select for keluarga --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $("#pemohon").select2();
        });
    </script>

    {{-- init select for surat --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $("#suratDiajukan").select2();
        });
    </script>

    {{-- change when kelaurga click --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $("#pemohon").change(function(){
                var nikPassed = $("#pemohon").val();

                $.get('/penduduk/fetchData/'+nikPassed, function(data){
                    $(".fetched-data").html(data);
                });
            });
        });
    </script>

    {{-- change when surat = Keterangan usaha --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $("#suratDiajukan").change(function(){
                var idSurat = $("#suratDiajukan").select2('data');
                var extractedData = idSurat[0].text;

                if(extractedData == "Surat Keterangan Usaha"){
                    $("#detailUsaha").attr('hidden',false);
                }else{
                    $("#detailUsaha").attr('hidden',true);
                }
            });
        });
    </script>

@endsection
