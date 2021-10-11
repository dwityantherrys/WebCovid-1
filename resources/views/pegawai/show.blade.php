@extends('app')
@section('title')
    Data pegawai
@endsection
@section('pegawai')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Data Pegawai </h1>
                <!-- <p>Bootstrap Components</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Pegawai</li>
                <li class="breadcrumb-item"><a href="/pegawai">Data Pegawai</a></li>
                <li class="breadcrumb-item"><a href="#">Data Pegawai</a></li>
            </ul>
        </div>
        <!-- Buttons-->
        <div class="tile">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('imgpegawai/' . $pegawai->foto) }}" width="180px" height="120px" alt="">
                        <table class="table-condensed">
							<tr>
                                <td>NIP</td>
                                <td>: </td>
                                <td>{{ $pegawai->NIP }}</td>
                            </tr>
							<tr>
                                <td>Nama</td>
                                <td>: </td>
                                <td>{{ $pegawai->nama }}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>: </td>
                                <td>{{ $pegawai->jabatan }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
