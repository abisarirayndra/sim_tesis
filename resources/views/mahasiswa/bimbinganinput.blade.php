@extends('mahasiswa.layout.index')

@section('css')

@endsection

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Input Materi Bimbingan</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <form action="{{route('mahasiswa.bimbingan')}}">

                    <div class="form-group">
                        <label for="Pembimbing">Pembimbing</label>
                        <input type="text" class="form-control" id="Pembimbing" placeholder="Pembimbing">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Materi</label>
                        <input type="text" class="form-control" id="Materi" placeholder="Materi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tanggal">
                    </div>

                    <button href="bimbinganmahasiswaview" class="btn btn-primary">Add</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection