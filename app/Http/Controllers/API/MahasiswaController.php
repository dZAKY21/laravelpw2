<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Response;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = mahasiswa::all();
        return response()->json($mahasiswa, HttpResponse::HTTP_OK);
}
}
