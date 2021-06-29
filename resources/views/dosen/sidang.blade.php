@extends('dosen.layout.index')
@section('css')
<script>
    function myFunction() {
        var x = document.getElementById("hadir-button");
        var y = document.getElementById("nilai-button");
        if (y.style.display === "none") {
            y.style.display = "block";
            x.style.display = "none";
        } else {
            y.style.display = "none";
        }
    }
</script>

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Mahasiswa Sidang</h1>
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
                            <th>Pembimbing</th>
                            <th>Penguji</th>
                            <th>Jadwal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Judul</th>
                            <th>Pembimbing</th>
                            <th>Penguji</th>
                            <th>Jadwal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <th>6026202007</th>
                            <td>Ashton Cox</td>
                            <td>Analisis Penerapan HTML di Web</td>
                            <td>
                                <li>Parman Sukarno</li>
                                <li>Rahmat</li>
                            </td>
                            <td>
                                <li>Isa Mulia</li>
                                <li>Aulia Rahman</li>
                            </td>
                            <td>01/01/2021 Sesi 4(15.30)</td>
                            <td>Sedang Berlangsung</td>
                            <td><a id="hadir-button" class="btn btn-success" onclick="myFunction()">Hadir</a>
                                <a id="nilai-button" href="{{ route('dosen.nilai')}}" class="btn hide btn-success " style="display: none;">Nilai</a>
                            </td>
                        </tr>
                        <tr>
                            <th>6026202005</th>
                            <td>Tiger Nixon</td>
                            <td>Analisis Penerapan HTML di IoT</td>
                            <td>
                                <li>Husnul</li>
                                <li>Rahmat</li>
                            </td>
                            <td>
                                <li>Isa Mulia</li>
                                <li>Aulia Rahman</li>
                            </td>
                            <td>03/01/2021 Sesi 4(15.30)</td>
                            <td>Belum dimulai</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>6026202006</th>
                            <td>Garrett Winters</td>
                            <td>Analisis Penerapan HTML di API</td>
                            <td>
                                <li>Isa mulia</li>
                                <li>Rahmat</li>
                            </td>
                            <td>
                                <li>Dimas</li>
                                <li>Agus</li>
                            </td>
                            <td>05/01/2021 Sesi 4(15.30)</td>
                            <td>Belum dimulai</td>
                            <td>-</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection