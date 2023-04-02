<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class AmalanYaumiModel extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'amalan_yaumi'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'judul_amalan_yaumi',
        'konten_amalan_yaumi',
        'gambar_amalan_yaumi',
        'video_amalan_yaumi',
        'status_amalan_yaumi',
    ];
}
