@extends('mahasiswa.layout.index')

@section('css')

@endsection

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Pendaftaran Sidang</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <form action="{{route('mahasiswa.daftarsidang') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Pembimbing">NRP</label>
                        <input type="text" class="form-control" name="id_mahasiswa" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Nama</label>
                        <input type="text" class="form-control" name="" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Pembimbing 1</label>
                        <input type="text" class="form-control" name="id_pembimbing1" placeholder="Pembimbing 1">
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Pembimbing 2</label>
                        <input type="text" class="form-control" name="id_pembimbing2" placeholder="Pembimbing 2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Sidang</label>
                        <input type="text" class="form-control" name="" placeholder="Tanggal">
                    </div>

                    <button href="" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection