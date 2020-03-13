@extends('layouts.base')

@section('addressTitle','Website Manajer')

@section('contentHere')

    <div class="card shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-primary">
                <div class="custom-title">Website Manajer</div>
                <div class="custom-post-title">Edit Konten Website</div>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success successAlert">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
        </div>
        <div class="card-body">
                @if(!isset($findContent->id))
                    <form method="POST" action="{{ route('manajer-website.store') }}" enctype="multipart/form-data">
                @else
                    <form method="POST" action="{{ route('manajer-website.update', $findContent->id) }}" enctype="multipart/form-data">
                    @method('put')
                @endif

                @csrf

                <div class="form-group">
                    <label for="logoDesa">Logo Desa</label>
                    <input id="logoDesa" type="file" name="logoDesa">
                </div>

                @if ($findContent->first())
                    <div class="form-group">
                        <label>Foto pada Website Saat ini :</label>
                        <br>
                        <img src="{{ url('/images/'.$request->logoDesa)}}">
                        <input type="hidden" name="logoDesaName" value="{{$request->logoDesa}}">
                    </div>
                @else
                    <div class="form-group">
                        <label><i>Foto belum ditambahkan</i></label>
                    </div>
                @endif

                <div class="form-group">
                    <label for="sliderPhoto">Foto Slider</label>
                    <input id="sliderPhoto" type="file" name="sliderPhoto">
                </div>

                @if ($findContent->first())
                    <div class="form-group">
                        <label>Foto pada Website Saat ini :</label>
                        <br>
                        <img src="{{ url('/images/'.$request->sliderPhoto)}}" style="width:30%">
                        <input type="hidden" name="sliderPhotoName" value="{{$request->sliderPhoto}}">
                    </div>
                @else
                    <div class="form-group">
                        <label><i>Foto belum ditambahkan</i></label>
                    </div>
                @endif

                <div class="form-group">
                    <label for="sliderTextH1">Teks Slider <small><i>Text Besar</i></small></label>
                    <input class="form-control" id="sliderTextH1" type="text" name="sliderTextH1" placeholder="" value="{{ old('sliderTextH1', $request->sliderTextH1) }}">
                </div>

                <div class="form-group">
                    <label for="sliderTextH2">Teks Slider <small><i>Text Kecil</i></small></label>
                    <input class="form-control" id="sliderTextH2" type="text" name="sliderTextH2" placeholder="" value="{{ old('sliderTextH2', $request->sliderTextH2) }}">
                </div>

                <div class="form-group">
                    <label for="visidesa">Visi Desa</label>
                    <input class="form-control" id="visidesa" type="text" name="visidesa" placeholder="" value="{{ old('visidesa', $request->visi) }}">
                </div>

                <div class="form-group">
                    <label for="misidesa">Misi Desa</label>
                    <textarea class="form-control" name="misidesa" id="misidesa" rows="10" cols="80"
                        placeholder="Misi Desa">
                        {{ old('sliderTextH1', $request->misi) }}
                    </textarea>
                </div>


                <div class="form-group">
                    <label for="lokasiDesa">Lokasi Kantor Desa <small><i>Masukkan Link <a
                                    href="https://www.google.com/maps?hl=id" target="_blank"
                                    style="text-decoration:none;">Google Maps</a></i></small></label>
                    <input class="form-control" id="lokasiDesa" type="text" name="lokasiDesa" placeholder="" value="{{ old('lokasiDesa', $request->lokasiDesa) }}">
                </div>


                <button class="btn btn-secondary reset" type="reset">Ulang</button>
                &nbsp;
                <button class="btn btn-success" type="submit">Simpan</button>
        </div>
        </form>
</div>





@endsection

@section('scriptPlace')
<!-- Init CK Editor -->
<script>
    $(document).ready(function(){
        CKEDITOR.replace( 'misidesa' );
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
