@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mahasiswa Daftar Sidang</h1>
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
                            <th>Pembimbing 1</th>
                            <th>Pembimbing 2</th>
                            <th>Jadwal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Judul</th>
                            <th>Pembimbing 1</th>
                            <th>Pembimbing 2</th>
                            <th>Jadwal</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <th>6026202005</th>
                            <td>Tiger Nixon</td>
                            <td>Analisis Penerapan HTML di IoT</td>
                            <td>Parman</td>
                            <td>Rahmat</td>
                            <td>10/01/2020 Sesi 1</td>
                            <td><a href="{{ route('admin.jadwalsidangdetail')}}" class="btn btn-success">Detail</a></td>
                        </tr>
                        <tr>
                            <th>6026202006</th>
                            <td>Garrett Winters</td>
                            <td>Analisis Penerapan HTML di API</td>
                            <td>Aulia</td>
                            <td>-</td>
                            <td>10/01/2020 Sesi 2</td>
                            <td><a href="{{ route('admin.jadwalsidangdetail')}}" class="btn btn-success">Detail</a></td>
                        </tr>
                        <tr>
                            <th>6026202007</th>
                            <td>Ashton Cox</td>
                            <td>Analisis Penerapan HTML di Web</td>
                            <td>Rahmat</td>
                            <td>-</td>
                            <td>10/01/2020 Sesi 3</td>
                            <td><a href="{{ route('admin.jadwalsidangdetail')}}" class="btn btn-success">Detail</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection