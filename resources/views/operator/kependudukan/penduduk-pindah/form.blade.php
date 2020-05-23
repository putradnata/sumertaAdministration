@extends('layouts.base')

@section('contentHere')
    <div class="card shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-primary">
                <div class="custom-title">Penduduk Pindah</div>
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
            {{-- @if(!isset($pendudukFind->NIK))
            <form method="POST" action="{{ route('kependudukan.store') }}">
                @else
                <form method="POST" action="{{ route('kependudukan.update', $pendudukFind->NIK) }}">
                    @method('put')
                    @endif --}}
                    <form></form>
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="namaLengkap">Nama Penduduk</label>
                            <select id="namaLengkap" class="form-control">
                                <option hidden> ---</option>
                                @foreach ($penduduk as $pdk)
                                    <option value="{{ $pdk->NIK }}">{{ $pdk->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <button class="btn btn-secondary reset" type="reset" data-dismiss="modal">Ulang</button>
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
        </div>
    </div>
@endsection

@section('scriptPlace')
<script type="text/javascript">
    $(document).ready(function(){
        // $("#detailPenduduk").attr('hidden',true);
    });
</script>

{{-- init select for penduduk --}}
<script type="text/javascript">
    $(document).ready(function(){
        $("#namaLengkap").select2();
    });
</script>

<!-- Init Zebra Date Picker -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#tanggalLahir").Zebra_DatePicker();
    });
</script>
@endsection
