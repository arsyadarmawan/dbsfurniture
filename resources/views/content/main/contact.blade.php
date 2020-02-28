@extends('layouts.main')

@section('title')
    KONTAK
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
    <!-- start information -->
    <section id="information" class="information">
        <div class="container">
        <div class="card-panel  ">
            <div class="icon center-align">
                <!-- <i class="medium material-icons center-align">star</i> -->
                <h5><b>Penting!!</b></h5>
                <p >Kami percaya konsumen sedang mencari produk yang berkualitas, kami siap melayani anda dengan desain 
                    sendiri maupun dari kami. Ayo isikan kontak anda di bawah ini kami siap menjangkau anda di wilayah Sumatra Barat..
                </p >
            </div>
        </div>

        </div>
    </section>
    <!-- end information -->
    <!-- section maps -->
    <section id="map" class="map center-align">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.5195168736645!2d100.59515912085772!3d-1.4619905727486429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd34add5e3529dd%3A0x653872f3b5161b22!2sJl.%20Padang%20-%20Muko-Muko%20No.32%2C%20Iv%20Koto%20Hilie%2C%20Batang%20Kapas%2C%20Kabupaten%20Pesisir%20Selatan%2C%20Sumatera%20Barat%2025661!5e0!3m2!1sen!2sid!4v1579885679787!5m2!1sen!2sid"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
    <!-- end maps -->
    <!-- start contact -->
    <section class="contact scrollspy" id="contact">
        <div class="container">
            <h3 class="grey-text text-darken-3 center-align flow-text">Kami Siap Memberikan Pelayanan Terbaik</h3>
            <div class="row">
                <div class="col m4 s12">
                    <div class="card-panel amber accent-4 center-align ">
                        <i class="medium material-icons white-text">location_on</i>
                        <h5>Kontak</h5>
                        <p>Silahkan hubungi kontak kami, untuk mendapatkan furniture terbaik kami</p>
                    </div>

                    <ul class="collection with-header">
                        <li class="collection-header"><b>Alamat Kami</b></li>
                        <li class="collection-item">Belakang Puskesmas Pasar Kuok, Jalan Baru – Bukit Tambun Tulang,
                        </li>
                        <li class="collection-item">Kenagarian IV Koto Hilie, Kecamatan Batang Kapas, Kabupaten Pesisir
                            Selatan</li>
                        <li class="collection-item">Provinsi Sumatera Barat.</li>
                    </ul>
                </div>
                <div class="col m8 s12">
                    <div class="card-panel">
                        <form action="{{route('feedback.store')}}" method="POST">
                            <!-- <h5>Kirim Pesanan Anda</h5> -->
                            @csrf
                            <div class="input-field">
                                <input required type="text" name="name" id="name" class="validate">
                                <label for="name">Nama</label>
                            </div>
                            <div class="input-field">
                                <input required type="email" name="email" id="email" class="validate">
                                <label for="name">Email</label>
                            </div>
                            <div class="input-field">
                                <input required type="text" name="number" id="number" class="validate">
                                <label for="name">No Telepon</label>
                            </div>
                            <div class="input-field">
                                <textarea required name="message" id="message"
                                    class="materialize-textarea validate"></textarea>
                                <label for="name">Masukan Untuk DBS</label>
                            </div>
                            <div class="submit-btn right-align">
                                <button type="submit" class="btn blue darken-2">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->
    
@endsection
