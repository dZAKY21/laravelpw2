<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <title>Mahasiswa< /title> <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script> </head> <body> @extends('layout.main') @section('title', 'Program Studi') @section('content') <h1>Halaman
    Program Studi</h1> <center>
<table class="table table-striped"> <tr> <th>Nama Prodi</th>
    <th>Nama Fakultas</th> </tr>
    @foreach ($prodi as $item)
    <tr>
        <td>{{ $item['nama'] }}</td>
        <td>{{ $item['fakultas']['nama'] }}</td>
        <td></td>
    </tr>
    @endforeach
</table>
</center>
@endsection
</body>

</html>