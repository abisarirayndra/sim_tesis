@extends('mahasiswa.layout.index')

@section('css')

@endsection

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Sidang</h1>
    <p class="mb-4">Anda telah melakukan pendaftaran sidang, berikut adalah data sidang yang telah terdaftar</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <form action="{{route('mahasiswa.updatesidang') }}" enctype="multipart/form-data">
                    @csrf

                    <div hidden class="form-group">
                        <label for="Pembimbing"></label>
                        <input type="text" class="form-control" name="id" value="<?= $sidang->id; ?>">

                    </div>
                    <div hidden class="form-group">
                        <label for="Pembimbing"></label>
                        <input type="text" class="form-control" name="id_mahasiswa" value="<?= $userid; ?>">

                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">NRP</label>
                        <input disabled type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" placeholder="NRP" value="{{$sidang->nrp}}">
                        @error('nrp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Nama</label>
                        <input disabled type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{$sidang->nama}}">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Pembimbing 1</label>
                        <select disabled class="form-select custom-select @error('id_pembimbing1') is-invalid @enderror" name="id_pembimbing1" value="">
                            <option disabled {{ $sidang->id_pembimbing1 ? "" : "selected" }} value> -- select an option -- </option>
                            @foreach ($dosens as $dosen)
                            <option {{ $sidang->id_pembimbing1 == $dosen->id ? "selected" : "" }} value="{{ $dosen->id }}">{{ $dosen->username }}</option>
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
                        <select disabled class="form-select custom-select @error('id_pembimbing2') is-invalid @enderror" name="id_pembimbing2" value="">
                            <option {{ $sidang->id_pembimbing2 ? "" : "selected" }} value> -- select an option -- </option>
                            @foreach ($dosens as $dosen)
                            <option {{ $sidang->id_pembimbing2 == $dosen->id ? "selected" : "" }} value="{{ $dosen->id }}">{{ $dosen->username }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input disabled type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul" value="{{$sidang->judul}}">
                        @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Sidang</label>
                        <input disabled type="text" class="form-control" name="tanggal" placeholder="Tanggal" value="{{old('tanggal') ? old('tanggal') : ''}}">
                    </div>

                    <button href="" class="btn btn-primary" onclick="return confirm('Are you sure?')">update</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection