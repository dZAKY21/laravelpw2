@extends('layout.main')
@section('title', 'Prodi')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Program Studi</h4>
                    <p class="card-description">
                        Ini Adalah Daftar Program Studi Universitas Multi Data Palembang

                    </p>
                    <div class="card-body">
                        <h4 class="card-title">Default form</h4>
                        <p class="card-description">
                            Basic form layout
                        </p>
                        <form class="forms-sample" method="POST" action="{{ route('prodi.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Prodi</label>
                                <input type="text" class="form-control" name="nama" placeholder="Name Prodi">
                                @error('nama')
                                    <label class="text-danger">{{ $message }} </ label>
                                        <select name="fakultas_id" class="form-control">
                                            <option value="">Pilih</option>
                                            {{-- option diambil dari Model Fakultas --}}
                                        </select>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="fakultas_id">Nama Fakultas</label>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="{{ url('fakultas') }}" class="btn btn-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
