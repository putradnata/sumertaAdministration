@foreach ($selectBanjar as $banjar)
    <table class="table" name="detailBanjar" id="detailBanjar">
        <tr>
            <th style="width:30%;">Nama Banjar</th>
            <td>:</td>
            <td>{{ $banjar->nama }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td>{{ $banjar->alamat }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>:</td>
            <td>{{ $banjar->keterangan }}</td>
        </tr>
    </table>
@endforeach

