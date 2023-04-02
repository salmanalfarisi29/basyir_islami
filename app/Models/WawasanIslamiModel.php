<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WawasanIslamiModel extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'wawasan_islami'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'judul_wawasan_islami',
        'ringkasan_wawasan_islami',
        'konten_wawasan_islami',
        'gambar_wawasan_islami',
        'video_wawasan_islami',
        'status_wawasan_islami',
    ];
}
