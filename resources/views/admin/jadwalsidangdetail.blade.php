@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Penjadwalan Sidang</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <form action="{{ route('admin.jadwalsidang')}}">

                    <div class="form-group">
                        <label for="Pembimbing">NRP</label>
                        <input type="text" class="form-control" id="Pembimbing" placeholder="620602005">
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Nama</label>
                        <input type="text" class="form-control" id="Pembimbing" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Pembimbing 1</label>
                        <input type="text" class="form-control" id="Pembimbing" placeholder="Pembimbing 1">
                    </div>
                    <div class="form-group">
                        <label for="Pembimbing">Pembimbing 2</label>
                        <input type="text" class="form-control" id="Pembimbing" placeholder="Pembimbing 2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" class="form-control" id="Materi" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Sidang</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tanggal">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sesi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sesi">
                    </div>

                    <button href="" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection