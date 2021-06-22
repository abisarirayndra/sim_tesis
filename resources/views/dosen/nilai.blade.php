@extends('dosen.layout.index')

@section('content')
<div class="row" style="margin-left: 28% ;">
    <div class="col-sm-12">
        <div class="page-title-box">

            <h1 class="page-title col-sm-10">Input Nilai Sidang</h1>

        </div>
    </div>
</div>

<br>

<form class="form-horizontal" action="{{ route('dosen.upnilai') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin-left: 30% ;" class="form-group ">
        <div class="col-md-6 ">
            <input type="text" class="form-control" placeholder="Nama" name="nama">
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="NRP" name="nrp">
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="posisi">
                <option value="Dosen Pembimbing 1">Dosen Pembimbing 1</option>
                <option value="Dosen Pembimbing 2">Dosen Pembimbing 2</option>
                <option value="Dosen Penguji 1">Dosen Penguji 1</option>
                <option value="Dosen Penguji 2">Dosen Penguji 2</option>

            </select>
        </div>
    </div>

    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="Nilai Point A" name="nilai_a">
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="Nilai Point B" name="nilai_b">
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="Nilai Point C" name="nilai_c">
        </div>
    </div>

    <div class="form-group my-1" style="margin-left: 42% ;">
        <div class="col-sm-offset-6 col-sm-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
