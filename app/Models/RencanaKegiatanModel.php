<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RencanaKegiatanModel extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'rencana_kegiatan'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'id_user',
        'id_amalan_yaumi',
        'status_rencana_kegiatan',
    ];
}
