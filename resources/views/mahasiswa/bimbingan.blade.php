@extends('mahasiswa.layout.index')

@section('css')

@endsection

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Bimbingan Tesis</h1>
    <p class="mb-4">Berikut adalah daftar bimbingan yang telah dilakukan oleh mahasiswa selama masa pengerjaan tesis. jangan lupa untuk meminta approval kepada dosen pembimbing.</p>
    <a href="{{ route('mahasiswa.bimbinganinput')}}" class="btn btn-primary mb-2 ">input Bimbingan</a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Bimbingan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Pembimbing</th>
                            <th>Materi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tanggal</th>
                            <th>Pembimbing</th>
                            <th>Materi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>01/01/2001</td>
                            <td>Rahmat</td>
                            <td>Bab 1 Masih kurang detail</td>
                            <td><a style="color: red;">Waiting Approval</a></td>
                            <td>
                                <a href="{{ route('mahasiswa.bimbinganinput')}}" class="btn btn-warning">Update</a>
                                <form action="" class="d-inline" method="DELETE">
                                    <input type="hidden" name="Id" value="">
                                    <button type="submit" href="" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>01/01/2001</td>
                            <td>Rahmat</td>
                            <td>Bab 1 Masih kurang detail</td>
                            <td><a style="color: red;">Waiting Approval</a></td>
                            <td>
                                <a href="{{ route('mahasiswa.bimbinganinput')}}" class="btn btn-warning">Update</a>
                                <form action="" class="d-inline" method="DELETE">
                                    <input type="hidden" name="Id" value="">
                                    <button type="submit" href="" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>01/01/2001</td>
                            <td>Rahmat</td>
                            <td>Bab 1 Masih kurang detail</td>
                            <td><a style="color: green;">Approved</a></td>
                            <td>-</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection