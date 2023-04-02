<?php

namespace App\Http\Controllers\Api;

use App\Models\DoaDetailModel;
use App\Http\Resources\DoaDetailResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DoaDetailController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get doa_detail
        $doa_detail = DoaDetailModel::latest()->paginate(5);

        //return collection of doa_detail as a resource
        return new DoaDetailResource(true, 'List Data DoaDetail', $doa_detail);
    }
}
