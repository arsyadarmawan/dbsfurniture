@extends('layouts.main')

@section('title')
    BERANDA
@endsection

@section('navbar')
    @include('content.component.navbar')    
@endsection

@section('sidenav')
    @include('content.component.sidenav')
@endsection


@section('slider')
    @include('content.component.slider')
@endsection

@section('content')
    {{-- start service --}}
    <section id="services" class="services scrollspy">
        <div class="container">
            <h3 class="service-heading">Layanan <span class="service-heading-next"> Kami </span></h3>
            <div class="row">
                <div class="col m4 s12 center-align">
                    <div class="card-panel">
                        <i class="large material-icons ">local_hotel</i>
                        <h6><b>Perlengkapan Rumah </b></h6>
                        <p>Kami siap menyiadakan produk-produk unggulan kami seperti kitchen set, ruang tamu, perlengkapan tidur. Kami memberikan layanan 
                            pesananan secara kustom atau desain dari kami
                        </p>
                    </div>
                </div>
                <div class="col m4 s12 center-align">
                    <div class="card-panel">
                        <i class="large material-icons">local_convenience_store</i>
                        <h6><b>Toko / Cafe</b></h6>
                        <p>Kami siap menyiadakan produk-produk unggulan kami seperti ruang kantor, meja kantor, dan segala kebutuhan kantor. Kami memberikan layanan 
                            pesananan secara kustom atau desain dari kami <br></p>
                    </div>
                </div>
                <div class="col m4 s12 center-align">
                    <div class="card-panel">
                        <i class="large material-icons">location_city</i>
                        <h6><b>Kantor dan Hotel</b></h6>
                        <p>Kami siap menyiadakan produk-produk unggulan kami seperti ruang kantor, meja kantor, dan segala kebutuhan kantor. Kami memberikan layanan 
                            pesananan secara kustom atau desain dari kami </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- parallax --> --}}
    <section id="parallax">
        <div class="parallax-container">
            <div class="parallax">
            <img src="{{asset('img/background/back-2.jfif')}}">
            </div>
            <div class="container">
                <div class="row">
                    <h4 class="parallax-quotes">Miliki Rumah Serasa Hotel</h4>
                </div>
                <div class="order center-align">
                    <a href="{{route('orderCustom')}}" class="center-align waves-effect waves-light btn-large blue darken-2">Pemesanan</a>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- end parralax --> --}}
    <section id="product" class="product scrollspy">
        <div class="container">
            <h3 class="text-heading">Produk <span class="text-heading-next">Terbaru</span> </h3>
            <div class="row">
                @foreach ($products as $item)
                    <div class="col m4 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator responsive-img" src="{{asset('storage/'.$item->cover)}}" /> 
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">{{$item->title}}<i
                                        class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">{{$item->title}}<i class="material-icons right">close</i></span>
                                
                                <p>{!! $item->description !!}
                                {{-- <p>Menyediakan furniture untuk keperluan dapur seperti meja makan, kabinet dapur, mini bar, kursi bar, dll</p> --}}
                                <a href="{{url('home/product')}}" class="waves-effect waves-light btn blue darken-2 pulse">Telusuri</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
    {{-- <!-- end produk --> --}}
    {{-- <!-- start subscription --> --}}
    <section id="subscription" class="amber accent-4 scrollspy">
        <div class="subscription">
            <div class="container">
                <div class="row">   
                    <div class="col m6 s12">
                        <h3 class="subscription-heading">berlangganan <span class="subscription-heading-next">berita</span> </h3>
                    </div>
                    <div class="col m6 s12">
                        <div class="box">
                            <form action="{{route('subscriber')}}" method="POST">
                                @csrf
                                <input type="email" name="email" placeholder="masukan email">

                                <input type="submit" value="kirim">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- end subscription --> --}}

    {{-- <!-- start portolio --> --}}
    <section id="portofolio" class="portofolio scrollspy">
        <div class="container">
            <h3 class="text-heading">Portofolio <span class="text-heading-next">Kami</span></h3>
            <div class="row">
                <div class="col m4 s12">
                    <img class="responsive-img materialboxed" src="{{asset('img/product/bed.jfif')}}">
                </div>
                <div class="col m4 s12">
                    <img class="responsive-img materialboxed" src="{{asset('img/product/kitchen.jfif')}}">
                </div>
                <div class="col m4 s12">
                    <img class="responsive-img materialboxed" src="{{asset('img/product/photo-1554624219-9ef0715c9afc.jfif')}}">
                </div>
            </div>
            <div class="row">
                <div class="col m4 s12">
                    <img class="responsive-img materialboxed" src="{{asset('img/background/back-4.jfif')}}">
                </div>
                <div class="col m4 s12">
                    <img class="responsive-img materialboxed" src="{{asset('img/product/cabinet.jfif')}}">
                </div>
                <div class="col m4 s12">
                    <img class="responsive-img materialboxed" src="{{asset('img/product/bar.jfif')}}">
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- end portofolio --> --}}

    {{-- <!-- start contact --> --}}
    <section class="contact scrollspy" id="contact">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.5195168736645!2d100.59515912085772!3d-1.4619905727486429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd34add5e3529dd%3A0x653872f3b5161b22!2sJl.%20Padang%20-%20Muko-Muko%20No.32%2C%20Iv%20Koto%20Hilie%2C%20Batang%20Kapas%2C%20Kabupaten%20Pesisir%20Selatan%2C%20Sumatera%20Barat%2025661!5e0!3m2!1sen!2sid!4v1579885679787!5m2!1sen!2sid"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
    {{-- <!-- end contact --> --}}
@endsection