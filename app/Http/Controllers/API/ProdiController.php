<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Response as HttpResponse;


class ProdiController extends Controller
{
      public function index(){
        $prodi = Prodi::all();
        return response()->json($prodi, HttpResponse::HTTP_OK);
}
}
