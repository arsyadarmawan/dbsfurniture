@extends('layouts.main')

@section('title')
    DETAIL 
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
    <section id="carousel" >
        <div class="container">
            <div class="row">
                <div class="col m12 s12 center-align">
                    <img class="activator responsive-img z-depth-4" src="{{asset('storage/'.$product->cover)}}" /> 
                </div>
            </div>
            <div class="owl-carousel z-depth-4">
                @foreach (json_decode($product->image) as $key => $img )
                    <img class="responsive-img" src="{{asset('storage/'.$img)}}"/> 
                @endforeach
            </div>
            
        </div>
    </section>

    <!-- end carousel -->
    <br>
    <!-- start spesifikasi -->
    <section id="detail" class="spesification ">
    <h3 class="grey-text text-darken-3 center-align flow-text">{{$product->title}}</h3>
        <ul id="tabs-swipe-demo" class="tabs center-align">
            <li class="tab col s3 "><a href="#test-swipe-1">Deskripsi</a></li>
            <li class="tab col s3"><a class="active" href="#test-swipe-2">Pesan</a></li>
            <li class="tab col s3"><a href="#test-swipe-3">Spesifikasi</a></li>
        </ul>
        <div class="container">
            <div id="test-swipe-1" class="col s12">
                <div class="container">
                    <h5><b>Deskripsi Produk</b></h5>
                <p>{!! $product->description !!}</p>
                    <p class="black-text">**Hanya Melayani Daerah Sumatera Barat</p>

                </div>
            </div>
            <div id="test-swipe-2" class="col s12 center-align">
                <div class="container">
                    <b>
                        <p>Pesan Sekarang</p>
                    </b>
                    {{-- {{url('/home/form')}} --}}
                    <a href="{{route('order',['id'=> $product->id])}}" class="waves-effect waves-light btn-large pulse">Pesan </a>
                </div>

            </div>
            <div id="test-swipe-3" class="col s12 ">
                <div class="container">
                    <h5><b>Spesifikasi Produk</b></h5>
                   <p>{!!$product->specification!!}</p> 
                    <p>Kami dapat melayani produk satuan maupun full set</p>
                    <p>** Harga sewaktu-waktu bisa berubah</p>
                </div>

            </div>

        </div>
        
    </section>

    <div class="shareaholic-canvas" data-app="share_buttons" data-app-id="28788134"></div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
            });
        const tabs = document.querySelectorAll('.tabs');
        M.Tabs.init(tabs);
    });
    </script>

    <!-- end spesifikasi -->
@endsection