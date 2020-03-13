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
            </div>
            <div class="card-body">
                <p class="text-muted">Silahkan ajukan surat melalui form berikut.</p>
                <form method="POST">
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
                        <button type="reset" class="btn btn-outline-secondary">Batalkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Status Surat -->
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
                    <li class="">
                        <div class="timeline-icon">
                            <img src="{{ asset('newBackAssets/img/avatar/avatar1.jpg')}}" alt=""/>
                        </div>
                        <div class="act-time">Today</div>
                        <div class="base-timeline-info">
                            <a href="#">John123</a> Successfully purchased item#26
                        </div>
                        <small class="text-muted">
                            28 mins ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon bg-turquoise">
                            <i class="fa fa-download"></i>
                        </div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-danger">Farnandez</a> placed the order for accessories
                        </div>
                        <small class="text-muted">
                            2 days ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon bg-info">
                            <i class="fa fa-file-image-o"></i>
                        </div>
                        <div class="act-time">Yesterday</div>
                        <div class="base-timeline-info">
                            User <a href="#" class="text-purple">Lisa Maria</a> checked out from the market
                        </div>
                        <small class="text-muted">
                            12 mins ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon">
                            <img src="{{ asset('newBackAssets/img/avatar/avatar2.jpg')}}" alt=""/>
                        </div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-info">Charlie Johnson  </a> joined DashLab last week.
                        </div>
                        <small class="text-muted">
                            3 days ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="act-time">29 January</div>
                        <div class="base-timeline-info">
                            User <a href="#" class="text-warning">Lisa Maria</a> checked out from the market
                        </div>
                        <small class="text-muted">
                            15 mins ago
                        </small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
