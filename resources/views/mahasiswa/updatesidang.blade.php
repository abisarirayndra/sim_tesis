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
                <form action="{{route('mahasiswa.editsidang') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div hidden class="form-group">
                        <label for="Pembimbing"></label>
                        <input type="text" class="form-control" name="id" value="<?= $sidang->id; ?>">

                    </div>
                    <div hidden class="form-group">
                        <label for="Pembimbing"></label>
                        <input type="text" class="form-control" name="id_mahasiswa" value="<?= $userid; ?>">

                    </div>
                    <div class="form-group" has-validation>
                        <label for="Pembimbing">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" placeholder="NRP" value="{{old('nrp') ? old('nrp') : $sidang->nrp}}">
                        @error('nrp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama" value="{{old('nama') ? old('nama') : $sidang->nama}}">
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

                            @if(old('id_pembimbing1'))
                            <option {{ old('id_pembimbing1') == $dosen->id ? "selected" : "" }} value="{{ $dosen->id }}">{{ $dosen->username }}</option>
                            @else
                            <option {{ $sidang->id_pembimbing1 == $dosen->id ? "selected" : "" }} value="{{ $dosen->id }}">{{ $dosen->username }}</option>
                            @endif

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
                        <select class="form-select custom-select @error('id_pembimbing2') is-invalid @enderror" name="id_pembimbing2" value="$sidang->nama">
                            <option {{ old('id_pembimbing2') ? "" : "selected" }} value=null> -- select an option -- </option>
                            @foreach ($dosens as $dosen)
                            @if(old('id_pembimbing2'))
                            <option {{ old('id_pembimbing2') == $dosen->id ? "selected" : "" }} value="{{ $dosen->id }}">{{ $dosen->username }}</option>
                            @else
                            <option {{ $sidang->id_pembimbing2 == $dosen->id ? "selected" : "" }} value="{{ $dosen->id }}">{{ $dosen->username }}</option>
                            @endif

                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul" value="{{old('judul') ? old('judul') : $sidang->judul}}">
                        @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Sidang</label>
                        <input disabled type="text" class="form-control" name="" placeholder="tanggal" value="{{old('tanggal') ? old('tanggal') : ''}}">
                    </div>

                    <button href="" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection