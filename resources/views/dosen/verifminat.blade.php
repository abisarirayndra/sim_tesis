@extends('dosen.layout.index')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">

            <h1 class="page-title col-sm-10">Verifikasi Minat, Topik, Dospem</h1>

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
                <th scope="col">Minat</th>
                <th scope="col">Topik</th>
                <th scope="col">Dospem 1</th>
                <th scope="col">Dospem 2</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ABC</td>
                <td>123</td>
                <td>Minat 1</td>
                <td>Topik 1</td>
                <td>Mr. X</td>
                <td>Mr. Y</td>
                <td>
                    <button type="submit" class="btn btn-primary">Accept</button>
                    <button type="submit" class="btn btn-danger">Reject</button>
                </td>
            </tr>
            <tr>
                <td>DEF</td>
                <td>456</td>
                <td>Minat 1</td>
                <td>Topik 1</td>
                <td>Mr. X</td>
                <td>Mr. Y</td>
                <td>
                    <button type="submit" class="btn btn-primary">Accept</button>
                    <button type="submit" class="btn btn-danger">Reject</button>
                </td>
            </tr>
            <tr>
                <td>GHZ</td>
                <td>124</td>
                <td>Minat 1</td>
                <td>Topik 1</td>
                <td>Mr. X</td>
                <td>Mr. Y</td>
                <td>
                    <button type="submit" class="btn btn-primary">Accept</button>
                    <button type="submit" class="btn btn-danger">Reject</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
