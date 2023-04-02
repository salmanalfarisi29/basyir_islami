<?php

namespace App\Http\Controllers\Api;

use App\Models\DoaModel;
use App\Http\Resources\DoaResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DoaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get doa
        $doa = DoaModel::latest()->paginate(5);

        //return collection of doa as a resource
        return new DoaResource(true, 'List Data Doa', $doa);
    }
}
