<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return response()->json($mahasiswa, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            "npm" => "required|unique:mahasiswas",
            "nama" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required",
            "jk" => "required",
            "prodi_id" => "required",
            "foto" => "required| image"
        ]);
        mahasiswa::create($validasi);
        $response['success'] = true;
        $response['message'] = 'Mahasiswa berhasil disimpan';
        return response()->json(
            $response,
            Response::HTTP_CREATED
        );
    }
}
