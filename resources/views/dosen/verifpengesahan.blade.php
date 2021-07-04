@extends('dosen.layout.index')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">

            <h1 class="page-title col-sm-10">Verifikasi Bukti Pengesahan</h1>

        </div>
    </div>
</div>

<br>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">NRP</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ABC</td>
                <td>123</td>
                <td>
                    <a href=""> bukti_1.pdf</a>
                </td>
                <td>
                    <button type="submit" class="btn btn-danger">Reject</button>
                    <button type="submit" class="btn btn-primary">Verify</button>
                </td>
            </tr>
            <tr>
                <td>DEF</td>
                <td>456</td>
                <td>
                    <a href=""> bukti_2.pdf</a>
                </td>
                <td>
                    <button type="submit" class="btn btn-danger">Reject</button>
                    <button type="submit" class="btn btn-primary">Verify</button>
                </td>
            </tr>
            <tr>
                <td>GHZ</td>
                <td>124</td>
                <td>
                    <a href=""> bukti_3.pdf</a>
                </td>
                <td>
                    <button type="submit" class="btn btn-danger">Reject</button>
                    <button type="submit" class="btn btn-primary">Verify</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
