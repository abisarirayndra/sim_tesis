@extends('mahasiswa.layout.index')

@section('content')
<div class="row" style="margin-left: 28% ;">
    <div class="col-sm-12">
        <div class="page-title-box">

            <h1 class="page-title col-sm-10">Registrasi Pra Tesis</h1>

        </div>
    </div>
</div>

<br>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin-left: 30% ;" class="form-group ">
        <div class="col-md-6 ">
            <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama">
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="NRP" name="nrp">
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="prdi">
                <option value="Prodi A">Prodi A</option>
                <option value="Prodi B">Prodi B</option>
                <option value="Prodi C">Prodi C</option>
            </select>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="fak">
                <option value="Fakultas A">Fakultas A</option>
                <option value="Fakultas B">Fakultas B</option>
                <option value="Fakultas C">Fakultas C</option>
            </select>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="semester">
                <option value="Semester 1">Semester 1</option>
                <option value="Semester 2">Semester 2</option>
                <option value="Semester 3">Semester 3</option>
                <option value="Semester 4">Semester 4</option>
                <option value="Semester 5">Semester 5</option>
                <option value="Semester 6">Semester 6</option>
            </select>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="lab">
                <option value="MK Lab Pilihan 1">MK Lab Pilihan 1</option>
            </select>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="lab2">
                <option value="MK Lab Pilihan 1">MK Lab Pilihan 2</option>
            </select>
        </div>
    </div>

    <div class="form-group my-1" style="margin-left: 42% ;">
        <div class="col-sm-offset-6 col-sm-6">
            <button type="submit" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
