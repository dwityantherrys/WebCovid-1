@extends('main.header')
@section('konten')


        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Accomodation</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Accomodation</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Special Accomodation</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
                </div>
                <div class="row mb_30">
                    @foreach ($data as $datas)
                    <div class="col-lg-6 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{  asset('storage/' . $datas->photo) }}" alt="" width="400px", height="350px">
                            </div>
                            <a href="#"><h4 class="sec_h4">{{ $datas->name }}</h4></a>
                            <h5>Rp.{{ $datas->capacity }},-</h5>
                            <p>{{ $datas->description }} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="d-flex justify-content-center">
            {{ $data->render('pagination::bootstrap-4') }}
        </div>
@include('main.footer')
@endsection
