@extends('layouts.base')

@section('addressTitle','Data Surat Masuk')

@section('customStyle')
@endsection

@section('contentHere')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Data Surat Masuk</div>
                    <div class="custom-post-title">Desa Sumerta Kaja</div>
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

                <table id="tableSuratMasuk" class="table table-bordered table-striped" cellspacing="0">
                    <thead>
                        <tr style="text-align:center;">
                            <th>No.</th>
                            <th>Nomer Surat</th>
                            <th>Nama Pemohon</th>
                            <th>Surat</th>
                            <th>Asal Banjar</th>
                            <th colspan="2">Aksi</th>
                            {{-- <th colspan="3" style="width:10%;">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incomingLetter as $icl => $ic)
                            <tr>
                                <td style="text-align:center;">{{ ++$icl }}</td>
                                <td>{{ $ic->noSurat }}</td>
                                <td>{{ $ic->Pemohon }}</td>
                                <td>{{ $ic->JenisSurat }}</td>
                                <td>{{ $ic->Banjar }}</td>

                                <td style="text-align:center;">
                                    <a href="#" class="btn btn-secondary btn-sm" title="Terima"><i class="fa fa-user"></i> Kelian Dinas</a>

                                    <a href="#" class="btn btn-primary btn-sm" title="Terima"><i class="fa fa-user"></i> Kepala Desa</a>

                                    <a href="#" class="btn btn-success btn-sm" title="Terima"><i class="fa fa-check"></i> Selesai</a>
                                </td>

                                {{-- <td style="text-align:center;">
                                    <a href="#" class="btn btn-primary btn-sm" title="Detail" data-toggle="modal" data-id="{{ $ic->id }}" data-target="#banjarModal"><i class="fa fa-eye"></i></a>
                                </td> --}}

                                {{-- <td style="text-align:center;">
                                    <a href="{{ route('banjar.edit',$ic->id) }}" class="btn btn-warning btn-sm" title="Update"><i class="fa fa-sticky-note-o"></i></a>
                                </td> --}}

                                {{-- <td style="text-align:center;">
                                    <form method="POST" action="{{ route('banjar.destroy',$ic->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button class="btn btn-danger btn-sm" title="Hapus" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Init Modal -->

<div class="modal fade bd-example-modal-lg" id="banjarModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Detail Banjar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scriptPlace')
<!-- Initiate Data Table -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#tableSuratMasuk').DataTable();
    } );
</script>

<!-- Init Modal -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#banjarModal").on('show.bs.modal', function(e){
            var idBanjar = $(e.relatedTarget).data('id');

            $.get('/operator/banjar/'+idBanjar, function(data){
                $(".modal-body").html(data);
            });

        });
    });
</script>
<!-- End -->

<!-- Alert Fade out -->
<script>
    $(document).ready(function(){
        $(".successAlert").fadeTo(2000, 500).slideUp(500, function(){
            $(".successAlert").slideUp(500);
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(".errorAlert").fadeTo(2000, 500).slideUp(500, function(){
            $(".errorAlert").slideUp(500);
        });
    });
</script>
@endsection
