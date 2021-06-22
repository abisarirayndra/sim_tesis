@extends('admin.layout.index')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">

            <h1 class="page-title col-sm-10">Verifikasi Kelengkapan Yudisium</h1>

        </div>
    </div>
</div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">NRP</th>
            <th scope="col">Dosen Pembimbing</th>
            <th scope="col">Kelengkapan Yudisium</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ABC</td>
            <td>123</td>
            <td>Otto</td>
            <td>
            <a href="{{ url('/admin/verif_yudisium/kelengkapan_yudisium.pdf')}}"> kelengkapan_yudisium.pdf</a>
            </td>
            <td>
                <button type="submit" class="btn btn-primary">Accept</button>
                <button type="submit" class="btn btn-danger">Reject</button>
            </td>
        </tr>

    </tbody>
</table>

@endsection