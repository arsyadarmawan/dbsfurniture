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
    <!-- section information -->
    <section id="information" class="information">
        <div class="container">
            <div class="card-panel  ">
                <div class="icon center-align">
                    <!-- <i class="medium material-icons center-align">star</i> -->
                    <h5><b>Penting!!</b></h5>
                    <p>Terimakasih sudah memesan melalui web, dimohon untuk mengisi form ini. Kami juga melayani konsultasi gratis!!
                    </p>
                </div>
            </div>
    
        </div>
    </section>
    <!-- end section -->

        <!-- form section -->
    <section id="form-order">
        <div class="container">
            <div class="row">
                <form action="{{route('store.order')}}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <div class="input-field">
                    <input required type="text" name="name" value="{{$product->title}}" class="validate">
                        <label for="title">Nama Barang</label>
                    </div>
                    <div class="input-field">
                        <input required type="text" name="name" placeholder="Nama Lengkap" id="number" class="validate">
                        <label for="name">Nama Pemesan</label>
                    </div>
                    <div class="input-field">
                        <input required type="number" name="number" placeholder="masukan dengan angka" id="number" class="validate">
                        <label for="name">No Telepon</label>
                    </div>
                    <div class="input-field">
                        <textarea required name="address" id="address" class="materialize-textarea validate" placeholder="alamat pengiriman barang"></textarea>
                        <label for="name">Alamat Lengkap</label>
                    </div>
                    <div class="input-field">
                        <input required type="date" name="date" placeholder="Pemesanan di tanggal" id="number" class="validate">
                        <label for="name">Tanggal Pengiriman</label>
                    </div>
                    <div class="input-field">
                        <textarea required name="message" id="message" class="materialize-textarea validate" placeholder="warna, ukuran, spesifikasi"></textarea>
                        <label for="name">Catatan Pesanan</label>
                    </div>
                    <div class="submit-btn right-align">
                        <button type="submit" class="btn blue darken-2">Kirim</button>
                    </div>

                </form>

            </div>
        </div>
    </section>
    <!-- end section -->
@endsection