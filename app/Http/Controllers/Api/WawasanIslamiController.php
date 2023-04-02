<?php

namespace App\Http\Controllers\Api;

use App\Models\WawasanIslamiModel;
use App\Http\Resources\WawasanIslamiResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class WawasanIslamiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get wawasan_islami
        $wawasan_islami = WawasanIslamiModel::latest()->paginate(5);

        //return collection of wawasan_islami as a resource
        return new WawasanIslamiResource(true, 'List Data WawasanIslami', $wawasan_islami);
    }
}
