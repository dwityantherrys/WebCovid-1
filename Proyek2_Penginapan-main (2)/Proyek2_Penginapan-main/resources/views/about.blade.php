@extends('main.header')
@section('konten')
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">About Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">Sejarah Kami<br>Visi Dan Misi</h2>
                            <p>Disini tempat bagi orang orang yang ingin merasakan keindahan alam di sekitar kalimantan. Kami juga sudah berdiri sejak tahun 2019.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->

        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Penginapan SDH</h2>
                    <p>Kami pecinta alam, Penginapak kami menyediakan nuansa Alam yang indah</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Warteg</h4>
                            <p>Di penginapan kami tersedia warteg yang menyediakan makanan tradisional dan juga ada ayam geprek.</p>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Persewaan Sepeda</h4>
                            <p>Kami menyediakan sepeda gunung, sepeda santai dan yang pasti telah menyediakan spot untuk bersepeda dengan nuansa alam yang memanjakan mata.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Laundy</h4>
                            <p>Laundy di penginapam kami tersedia gratis dan juga ada jasa express laundry.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="opacity:0.0;">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class=""></i></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Persewaan Mobil</h4>
                            <p>Mobil yang kami sediakan adalah untuk guna berkelilng kota dan juga keperluan lain dan biayanya juga gratis untuk pemakaian pertama. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->

        @include('main.footer')
@endsection
