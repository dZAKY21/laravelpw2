@extends('layout.main')
@section('title', 'Mahasiswa')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mahasiswa</h4>
                    <p class="card-description">
                       Formulir tambah mahasiswa

                    </p>
                    <div class="card-body">
                        <h4 class="card-title">Default form</h4>
                        <p class="card-description">
                            Basic form layout
                        </p>
                        <form class="forms-sample" method="POST" action="{{ route('mahasiswa.store') }}" enctype="multipart/form-data">
                            @csrf
                               <div class="form-group">
                                <label for="npm">Nomor pokok mahasiswa</label>
                                <input type="text" class="form-control" name="npm" placeholder="Nomor Pokok Mahasiswa">
                                @error('npm')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Mahasiswa</label>
                                <input type="text" class="form-control" name="nama" placeholder="Name Mahasiswa">
                                @error('nama')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                               <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir Mahasiswa</label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir Mahasiswa">
                                @error('tempat-lahir')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                               <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir Mahasiswa</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir Mahasiswa">
                                @error('tanggal_lahir')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                               <div class="form-group">
                                <label for="foto">Foto Mahasiswa</label>
                                <input type="file" class="form-control" name="foto" placeholder="Foto Mahasiswa">
                                @error('foto')
                                    <label class="text-danger">{{ $message }} </label>
                                @enderror
                            </div>
                               <div class="form-group">
                                <label for="prodi_id">Pilih Prodi</label>
                                <select name="prodi_id" class="form-control">
                                    <option value="">Pilih</option>
                                    @foreach ($prodi as $item)
                                            <option value="{{ $item->id }}"> {{ $item->nama }}</option>
                                    @endforeach
                                </select>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ url('fakultas') }}" class="btn btn-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
