<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $table = 'invitations';

    protected $fillable = [
        'id',
        'no_surat',
        'tanggal_surat',
        'lampiran',
        'perihal',
        'tanggal_pelaksanaan',
        'tujuan_undangan',
        'ttd',
    ];
}
