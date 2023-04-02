<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'berita'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'judul_berita',
        'ringkasan_berita',
        'konten_berita',
        'gambar_berita',
        'video_berita',
        'status_berita',
    ];
}
