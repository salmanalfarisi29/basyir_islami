<?php

namespace App\Http\Controllers\Api;

use App\Models\BeritaModel;
use App\Http\Resources\BeritaResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get berita
        $berita = BeritaModel::latest()->paginate(5);

        //return collection of berita as a resource
        return new BeritaResource(true, 'List Data Berita', $berita);
    }
}
