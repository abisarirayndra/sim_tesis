@extends('dosen.layout.index')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Mahasiswa Bimbingan</h1>
    <p class="mb-4">Berikut adalah daftar mahasiswa yang sedang melakukan bimbingan, silahkan approve mahasiswa yang telah
        melakukan input bimbingan supaya dapat melakukan pendaftaran sidang</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Mahasiswa Bimbingan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Judul</th>
                            <th>Total bimbingan</th>
                            <th>Status</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Judul</th>
                            <th>Total bimbingan</th>
                            <th>Status</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <th>6026202005</th>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>10</td>
                            <td><a style="color: rgb(255, 196, 0);">Waiting Approval</a></td>
                            <td><a href="{{ route('dosen.bimbingandetail')}}" class="btn btn-success">Detail</a></td>
                        </tr>
                        <tr>
                            <th>6026202006</th>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>5</td>
                            <td><a style="color: red;">Rejected</a></td>
                            <td><a href="{{ route('dosen.bimbingandetail')}}" class="btn btn-success">Detail</a></td>
                        </tr>
                        <tr>
                            <th>6026202007</th>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>3</td>
                            <td><a style="color: green;">Approved</a></td>
                            <td><a href="{{ route('dosen.bimbingandetail')}}" class="btn btn-success">Detail</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection