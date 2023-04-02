<?php

namespace App\Http\Controllers\Api;

use App\Models\AmalanYaumiModel;
use App\Http\Resources\AmalanYaumiResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AmalanYaumiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get amalan_yaumi
        $amalan_yaumi = AmalanYaumiModel::latest()->paginate(5);

        //return collection of amalan_yaumi as a resource
        return new AmalanYaumiResource(true, 'List Data AmalanYaumi', $amalan_yaumi);
    }
}
