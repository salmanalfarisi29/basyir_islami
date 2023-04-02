<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class KutipanModel extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'kutipan'; // dilakukan seperti ini agar tidak menjadi plural

    protected $fillable = [
        'judul_kutipan',
        'deskripsi_kutipan',
        'sumber_kutipan',
        'status_kutipan',
    ];
}
