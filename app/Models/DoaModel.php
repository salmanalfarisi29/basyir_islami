<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DoaModel extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'doa'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'judul_doa',
        'ringkasan_doa',
        'ringkasan_latin_doa',
        'status_doa',
    ];
}
