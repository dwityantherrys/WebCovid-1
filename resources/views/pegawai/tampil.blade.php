@extends('app')
@section('title')
Data Pegawai
@endsection
@section('Pegawai')
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
          <li class="breadcrumb-item"><a href="#">Data Pegawai</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pegawai as $tampil)
                    <tr>                      
                      <td><a href="{{route('pegawai.show', $tampil->id)}}">{{$tampil->NIP}}</a></td>
                      <td>{{$tampil->nama}}, {{$tampil->nama}}</td>
                      <td>{{$tampil->jabatan}}</td>
                      <td>
                       
                       <!-- <a class="btn btn-info" href="{{ route('pegawai.show',$tampil->id) }}"><span class="fa fa-book"></a>-->

                        <form action="{{route('pegawai.destroy', $tampil->id)}}" method="post">
                           <a href="{{url('/pegawai/'.$tampil->id.'/edit')}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"></span></button>
                        </form>
                      </td>
                      
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>           
          

            </div>            
          </div>
        </div>
        <div class="row">      
          
        </div>
      </div>
    </main>
@endsection