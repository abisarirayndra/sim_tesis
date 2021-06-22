@extends('admin.layout.index')

@section('content')
<link rel="stylesheet" href="{{ asset('dropzone/dist/dropzone.css') }}">
<style>
    .dropzoneDragArea {
        background-color: #fbfdff;
        border: 1px dashed #c0ccda;
        border-radius: 6px;
        padding: 60px;
        max-width: 80%;
        text-align: center;
        margin-bottom: 25px;
        margin-left: 25px;
        cursor: pointer;
    }
    .dropzone{
        box-shadow: 0px 2px 20px 0px #f2f2f2;
        border-radius: 10px;
    }
    td{
        padding: 20px;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">

            <h1 class="page-title col-sm-10">Menerbitkan SK Wisuda</h1>

        </div>
    </div>
</div>

<br>

<div class="container">
    <form class="pb-5" id="demoform" action="#" method="post" enctype="multipart/form-data">
        <table>
        <div class="form-group">
                <tr>
                    <td class="pr-5">
                        <label class="control-label">Judul File</label>
                    </td>
                    <td style="width: 700px">
                        <input type="text" class="form-control" id="#" placeholder="Judul File">
                    </td>
                </tr>
        </div>
        <div class="form-group">
                <tr>
                    <td class="pr-5">
                        <label class="control-label">Deskripsi File</label>
                    </td>
                    <td style="width: 700px">
                        <input type="text" class="form-control" id="" placeholder="Deskripsi">
                    </td>
                </tr>
        </div>

        </table>
        <div class="form-group">
            <label class="control-label ml-4" for="pwd">Upload File</label>
                <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
                        <i class="fas fa-upload mb-4" style="font-size: 36pt"></i> <br>
                        <span>You can drag and drop files here to add them</span>
                </div>
        </div>

        <div class="form-group my-1">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="float-right">
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>




<script src="{{ asset('dropzone/dist/min/dropzone.min.js') }}"></script>

@endsection
