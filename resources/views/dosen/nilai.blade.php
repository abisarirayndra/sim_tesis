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

<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
    <div style="margin-left: 30% ;" class="form-group ">
        <!-- <label class="control-label col-md-12 ">Nama :</label> -->
        <div class="col-md-6 ">
            <input type="text" class="form-control" id="#" placeholder="Nama">
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <!-- <label class="control-label col-sm-2">NRP :</label> -->
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="NRP"></input>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <!-- <label class="control-label col-sm-2">Dosen :</label> -->
        <div class="col-md-6">
            <select class="form-control " id="exampleFormControlSelect1">
                <option>Dosen Pembimbing 1</option>
                <option>Dosen Pembimbing 2</option>
                <option>Dosen Penguji 1</option>
                <option>Dosen Penguji 2</option>
                
            </select>
        </div>
    </div>
    
    <div style="margin-left: 30% ;" class="form-group">
        <!-- <label class="control-label col-sm-2">NRP :</label> -->
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="Nilai Point A"></input>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <!-- <label class="control-label col-sm-2">NRP :</label> -->
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="Nilai Point B"></input>
        </div>
    </div>
    <div style="margin-left: 30% ;" class="form-group">
        <!-- <label class="control-label col-sm-2">NRP :</label> -->
        <div class="col-md-6">
            <input type="text" class="form-control" id="" placeholder="Nilai Point C"></input>
        </div>
    </div>
    
    <div class="form-group my-1" style="margin-left: 42% ;">
        <div class="col-sm-offset-6 col-sm-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection