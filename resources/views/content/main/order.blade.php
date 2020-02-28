@extends('layouts.main')

@section('title')
    CARA ORDER
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
    <section id="spesification" class="spesification ">
        <h3 class="text-heading">Cara <span class="text-heading-next">Pemesanan</span></h3>
        <ul id="tabs-swipe-demo" class="tabs center-align">
            <li class="tab col s3 "><a href="#test-swipe-1">Pemesanan Furniture</a></li>
            <li class="tab col s3"><a class="active" href="#test-swipe-2">Pesan Kustom</a></li>
            <li class="tab col s3"><a href="#test-swipe-3">Pengiriman</a></li>
        </ul>
        <div class="container">
            <div id="test-swipe-1" class="col s12">
                <div class="container">
                    <h5><b>Pemesanan</b></h5>
                    @foreach ($description as $item)
                        @if ($item->name === 'order')
                            <p>{!!$item->description!!}</p>
                        @endif
                    @endforeach
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore culpa deleniti repellendus nobis,
                        incidunt voluptatum accusantium explicabo, placeat debitis sapiente eligendi. Saepe rem, sunt
                        repudiandae natus perferendis quisquam sint earum.</p> --}}
                    <p class="black-text">**Hanya Melayani Daerah Sumatera Barat</p>

                </div>
            </div>
            <div id="test-swipe-2" class="col s12">
                <div class="container">
                    <h5><b>Pesan Disini</b></h5>
                    <form action="{{route('custom.store')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <!-- <h5>Kirim Pesanan Anda</h5> -->
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
                                <textarea required name="address" id="address" class="materialize-textarea validate"></textarea>
                                <label for="name">Alamat</label>
                            </div>
                             <div class="input-field">
                                <select name="category">
                                    <option disabled selected>Pilih Kategori</option>
                                    @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <label>Kategori Furnitur</label>
                            </div>
                            <div class="input-field">
                                <textarea required name="message" id="message" class="materialize-textarea validate"></textarea>
                                <label for="name">Deskripsi Pesanan</label>
                            </div>
                            <div class="input-field">
                                <div class="file-field input-field">
                                    <div class="btn blue darken-2">
                                        <span>File</span>
                                        <input type="file" name="file" multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload file jika memiliki referensi desain">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn right-align">
                                <button type="submit" class="btn blue darken-2">Kirim</button>
                        
                            </div>
                        </form>
                </div>

            </div>
            <div id="test-swipe-3" class="col s12">
                <div class="container">
                    <h5><b>Kami Siap Melayani Anda</b></h5>
                    @foreach ($description as $item)
                        @if ($item->name === 'deliver')
                            <p>{!!$item->description!!}</p>
                        @endif
                    @endforeach
                    <p>Atau bisa konsultasi ke nomor kami <span><a href="https://wa.me/6281266867586?text=saya%20mau%20konsultasi%20produk%20dbs%20furniture">disini</a></span></p>
                </div>

                <!-- <div class="container center-align">
                    <a href="https://wa.me/6281266867586?text=saya%20tertarik%20produk%20kitchen%20set%20dari%20web"
                        class="waves-effect waves-light btn pulse"><i class="material-icons left">phone</i>Whatsapp</a>
                </div> -->

            </div>

        </div>
        <div class="shareaholic-canvas" data-app="share_buttons" data-app-id="28788134"></div>
    </section>
    <!-- end spesifikasi -->
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const select = document.querySelectorAll('select');
        M.FormSelect.init(select);
    });
</script>