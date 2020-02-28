@extends('layouts.main')

@section('title')
    TENTANG KAMI
@endsection

@section('navbar')
    @include('content.component.navbar')    
@endsection

@section('sidenav')
    @include('content.component.sidenav')
@endsection


@section('slider')
    @include('content.component.heading')
@endsection

@section('content')
        <!-- start spesifikasi -->
    <section id="about">
        <div class="about">
            <div class="container">
                <h3 class="text-heading">Tentang <span class="text-heading-next">Kami</span></h3>
                <div class="row">
                    <div class="col m6 s12">
                        <img src="{{asset('img/logo.jfif')}}" class="responsive-img">
                    </div>
                    <div class="col m6 s12">
                        {!! $desc->description !!}
                    {{-- <p>{{}}</p> --}}
                    </div>
                </div>

                <div class="row">
                    <h5 class="center-align">Bebas Konsultasi</h5>
                    <div class="about-social center-align">
                        <a href="https://wa.me/6281266867586?text=saya%20mau%20konsultasi%20produk%20dbs%20furniture%20"
                            class="waves-effect waves-light btn pulse"><i class="material-icons left">phone</i>Whatsapp</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end spesifikasi -->
@endsection