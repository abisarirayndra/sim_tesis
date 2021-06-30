@extends('mahasiswa.layout.index')

@section('css')

@endsection

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Pendaftaran Sidang</h1>
    <p class="mb-4">Anda belum melakukan pendaftaran sidang, silahkan isi form dibawah ini : </p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <form action="{{route('mahasiswa.daftarsidang') }}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div hidden class="form-group">
                        <label for="Pembimbing"></label>
                        <input type="text" class="form-control" name="id_mahasiswa" value="<?= $userid; ?>">

                    </div>
                    <div class="form-group" has-validation>
                        <label for="Pembimbing">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" placeholder="NRP" value="{{old('nrp') ? old('nrp') : ''}}">
                        @error('nrp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{old('nama') ? old('nama') : ''}}">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Pembimbing 1</label>
                        <select class="form-select custom-select @error('id_pembimbing1') is-invalid @enderror" name="id_pembimbing1" value="">
                            <option disabled {{ old('id_pembimbing1') ? "" : "selected" }} value> -- select an option -- </option>
                            @foreach ($dosens as $dosen)
                            <option {{ old('id_pembimbing1') == $dosen->id ? "selected" : "" }} value="{{ $dosen->id }}">{{ $dosen->username }}</option>
                            @endforeach
                        </select>
                        @error('id_pembimbing1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Pembimbing 2</label>
                        <select class="form-select custom-select @error('id_pembimbing2') is-invalid @enderror" name="id_pembimbing2" value="">
                            <option {{ old('id_pembimbing2') ? "" : "selected" }} value> -- select an option -- </option>
                            @foreach ($dosens as $dosen)
                            <option {{ old('id_pembimbing2') == $dosen->id ? "selected" : "" }} value="{{ $dosen->id }}">{{ $dosen->username }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul" value="{{old('judul') ? old('judul') : ''}}">
                        @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Sidang</label>
                        <input disabled type="text" class="form-control" name="" placeholder="Tanggal" value="{{old('id_pembimbing1') ? old('id_pembimbing1') : ''}}">
                    </div>

                    <button class="btn btn-primary">Daftar</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection