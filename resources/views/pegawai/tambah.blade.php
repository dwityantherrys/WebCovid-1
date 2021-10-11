@section('title')
    Tambah Data
@endsection
@section('pegawai')
    active
@endsection
@extends('app')
@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Tambah Data </h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Pegawai</li>
                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <!-- <h3 class="tile-title">Register</h3> -->
                    <div class="tile-body">
                        <!-- <form class="form-horizontal" action="{{ route('pegawai.store') }}" method="post"> -->
                        <form class="form-horizontal" action="{{ url('/pegawai') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="control-label col-md-3">NIP</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="NIP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nama</label>
                                <div class="col-md-8">
                                    <input class="form-control " type="text" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Jabatan</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="jabatan">
                                </div>
                            </div>

                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                                        <a class="btn btn-secondary" href="http://127.0.0.1:8000/pegawai"><i
                                                class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>

        </div>
        </div>
    </main>

@endsection
