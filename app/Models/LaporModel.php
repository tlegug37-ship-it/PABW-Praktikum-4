<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporModel extends Model
{
    protected $table = 'lapor';

    protected $fillable = [
        'nama_pelapor',
        'lokasi',
        'tinggi_genangan',
        'tanggal_kejadian',
    ];
}
