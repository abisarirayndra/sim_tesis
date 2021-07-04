@extends('mahasiswa.layout.index')

@section('content')
<div class="row" style="margin-left: 28% ;">
    <div class="col-sm-12">
        <div class="page-title-box">

            <h1 class="page-title col-sm-10">Pilih Minat, Topik, Dospem</h1>

        </div>
    </div>
</div>

<br>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="minat">
                <option value="Minat 1">Minat 1</option>
                <option value="Minat 2">Minat 2</option>
            </select>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="topik">
                <option value="Topik 1">Topik 1</option>
                <option value="Topik 2">Topik 2</option>
            </select>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="dospem_a">
                <option value="Dosen Pembimbing 1">Dosen Pembimbing 1</option>
                <option value="Dosen Pembimbing 1">Dosen Pembimbing 1</option>
            </select>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1" name="dospem_b">
                <option value="Dosen Pembimbing 2">Dosen Pembimbing 2</option>
                <option value="Dosen Pembimbing 2">Dosen Pembimbing 2</option>
            </select>
        </div>
    </div>
    <div class="form-group my-1" style="margin-left: 42% ;">
        <div class="col-sm-offset-6 col-sm-6">
            <button class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
