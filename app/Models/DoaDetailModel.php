<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DoaDetailModel extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'doa_detail'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'id_doa',
        'konten_doa',
        'konten_latin_doa',
        'status_doa',
    ];
}
