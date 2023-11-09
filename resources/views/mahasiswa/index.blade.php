<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    @extends('layout.main')
    @section('title', 'Program Studi')
    @section('content')
        <center>
            <h1>Halaman mahasiswa</h1>
            <table class="table table-striped">
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                </tr>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $item['npm'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <br>
                    </tr>
                @endforeach
            </table>
        </center>
    @endsection
</body>

</html>
@extends('layout.main')
@section('title', 'Index')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fakultas</h4>
                    <p class="card-description">
                        Ini Adalah Daftar Mahasiswa Universitas Multi Data Palembang

                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Foto</th>
                                    <th>Nama Prodi</th>
                                    <th>Nama Fakultas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $item['npm'] }}</td>
                                        <td>{{ $item['nama'] }}</td>
                                        <td>{{ $item['tmpt_lahir'] }}</td>
                                        <td>{{ $item['tgl_lahir'] }}</td>
                                        <td><img src="images/{{ $item['foto'] }}" class="rounded-circle" width="70px" />
                                        </td>
                                        <td>{{ $item['prodi']['nama'] }}</td>
                                        <td>{{ $item['prodi']['fakulitas']['nama'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
