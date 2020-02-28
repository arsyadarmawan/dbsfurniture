<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DBS FURNITURE | @yield('title')</title>
    
    <link rel="icon" href="{{asset('img/logo.jfif')}}">
    <link rel="stylesheet" href="{{ asset('css//materialize.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="https://kit.fontawesome.com/e232126b1d.js" crossorigin="anonymous"></script>
        <!-- BEGIN SHAREAHOLIC CODE -->
    <link rel="preload" href="https://cdn.shareaholic.net/assets/pub/shareaholic.js" as="script" />
    <meta name="shareaholic:site_id" content="1061fa15959aa66e0742ce60ed63fde9" />
    <script data-cfasync="false" async src="https://cdn.shareaholic.net/assets/pub/shareaholic.js"></script>
    <!-- END SHAREAHOLIC CODE -->
</head>
<body>


    @yield('navbar')

    @yield('sidenav')


    @yield('slider')

    @yield('content')



    <footer class="page-footer amber accent-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="black-text"><b>DBS Furniture</b></h5>
                    <p class="black-text text-lighten-4">
    Memproduksi per item atau per set mebel/furniture dengan desain bisa dari pembeli atau disediakan. Kami datang untuk
    melakukan pengukuran dan pemasangan sesuai kebutuhan pelanggan.
                    </p>
                    <p class="black-text">**Hanya Melayani Daerah Sumatera Barat</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="black-text"><b>Kontak Informasi</b></h5>
                    <ul class="black-text">
                        <li><i class="fab fa-instagram fa-lg"><a href="https://www.instagram.com/dbs_furniture/" class="footer-social">&nbsp;dbs-furniture</a></i> </li>
                        <li><i class="far fa-envelope-open fa-lg"><a href="#" class="footer-social">&nbsp;furnituredbs@gmail.com</a></i></li>
                        <li><i class="fab fa-facebook fa-lg"><a href="https://www.facebook.com/DBSFurniture/" class="footer-social">&nbsp;dbs-furniture</a></i></li>
                        <li><i class="fab fa-whatsapp fa-lg"><a href="https://wa.me/6281266867586?text=saya%20mau%20konsultasi%20produk%20dbs%20furniture%20" class="footer-social">&nbsp;0822-8340-9979</a></i></li>
                    
                        
                        <!-- <li>Instagram : DBS_Furniture</li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">dbsfurniture.com</a>
            </div>
        </div>
    </footer>



<!-- This site is converting visitors into subscribers and customers with Rocketbots - https://rocketbots.io -->
<script src="https://app.rocketbots.io/facebook/chat/plugin/22574/2535542636671654" async></script>
<!-- https://rocketbots.io/ -->
<!-- end parallax -->
</body>
</html>