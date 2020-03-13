@extends('layouts.base')

@section('addressTitle','Data Banjar')

@section('customStyle')
<!-- Button Style -->
<style>
    #tambahBanjar{
        margin: 0% 1% 1% 0%;
    }
</style>

@endsection

@section('contentHere')
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Data Banjar</div>
                    <div class="custom-post-title">Desa Sumerta Kaja</div>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success successAlert">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
            </div>
            <div class="card-body">

                <a href="{{ route('banjar.create') }}" id="tambahBanjar" class="btn btn-success"><i class="fa fa-home mr-2"></i>Tambah Banjar</a>

                <table id="tableBanjar" class="table table-bordered table-striped" cellspacing="0">
                    <thead>
                    <tr style="text-align:center;">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($banjar as $bjr => $bjrList)
                            <tr>
                                <td style="text-align:center;">{{ ++$bjr }}</td>
                                <td>{{ $bjrList->nama }}</td>
                                <td>{{ $bjrList->alamat }}</td>

                                <td style="text-align:center;">
                                    <a href="#" class="btn btn-primary btn-sm" title="Detail" data-toggle="modal" data-id="{{ $bjrList->id }}" data-target="#banjarModal"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('banjar.edit',$bjrList->id) }}" class="btn btn-warning btn-sm" title="Update"><i class="fa fa-sticky-note-o"></i></a>

                                    <a href="#" class="btn btn-danger btn-sm delete-data" data-id="{{ $bjrList->id }}" title="Hapus"><i class="fa fa-trash"></i></a>
                                </td>
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
        $('#tableBanjar').DataTable();
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

<!-- Init Swal -->
<script type="text/javascript">
    $(document).ready(function(){
        $(".delete-data").on('click',function(){

            var idBanjar = $(this).data('id');

            Swal.fire({
            title: 'Apakah anda Yakin?',
            text: "Anda akan menghapus data Banjar "+idBanjar,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Lanjutkan'
            }).then((result) => {
            if (result.value) {
                Swal.fire(
                'Data Terhapus!',
                'Data Penduduk Telah Terhapus.',
                'success'
                )
            }
            })

            });
        });

</script>

<!-- Alert Fade out -->
<script>
    $(document).ready(function(){
        $(".successAlert").fadeTo(2000, 500).slideUp(500, function(){
            $(".successAlert").slideUp(500);
        });
    });
</script>
@endsection
