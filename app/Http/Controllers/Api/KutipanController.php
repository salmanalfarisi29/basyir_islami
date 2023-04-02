<?php

namespace App\Http\Controllers\Api;

use App\Models\kutipanModel;
use App\Http\Resources\kutipanResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KutipanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get kutipan
        $kutipan = KutipanModel::latest()->paginate(5);

        //return collection of kutipan as a resource
        return new KutipanResource(true, 'List Data Kutipan', $kutipan);
    }
}
