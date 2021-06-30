@extends('dosen.layout.index')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Mahasiswa Mengajukan Sidang</h1>
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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($sidangs as $sidang)
                        <tr>
                            <th>{{ $sidang->nrp }}</th>
                            <td>{{ $sidang->nama }}</td>
                            <td>{{ $sidang->judul }}</td>

                            @if($sidang->verification_sidang)
                            <td><a style="color: green;">Approved</a></td>
                            @elseif($sidang->verification_sidang===null)
                            <td><a style="color: rgb(255, 196, 0);">Waiting Approval</a></td>

                            @else
                            <td><a style="color: red;">Rejected</a></td>
                            @endif

                            <td>
                                <a href="{{ route('dosen.daftarsidang')}}" class="btn btn-success">Approve</a>
                                <form action="" class="d-inline" method="DELETE">
                                    <input type="hidden" name="Id" value="">
                                    <button type="submit" href="" class="btn btn-danger" onclick="return confirm('Are you sure?')">Reject</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection