<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $table = 'pengajuan_surat';

    protected $fillable = [
        'noSurat',
        'NIK',
        'idJenisSurat',
        'idKelianDinas',
        'status',
        'idUser',
        'pathKK'
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
    ];
}
