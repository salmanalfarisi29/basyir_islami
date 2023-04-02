<?php

namespace App\Http\Controllers\Api;

use App\Models\RencanaKegiatanModel;
use App\Http\Resources\RencanaKegiatanResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RencanaKegiatanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get rencana_kegiatan
        $rencana_kegiatan = RencanaKegiatanModel::latest()->paginate(5);

        //return collection of rencana_kegiatan as a resource
        return new RencanaKegiatanResource(true, 'List Data RencanaKegiatan', $rencana_kegiatan);
    }
}
