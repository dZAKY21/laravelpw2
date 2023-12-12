<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FakultasController extends Controller
{
    public function index()
    {
        $fakultas = Fakultas::all();
        return response()->json($fakultas, Response::HTTP_OK);
    }

    public function storred(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|
            unique:fakultas'
        ]);
        Fakultas::create($validate);
        $response['success'] = true;
        $response['message'] = 'Fakultas berhasil disimpan';
        return response()->json(
            $response,
            Response::HTTP_CREATED
        );
    }
}
