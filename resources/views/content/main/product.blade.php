@extends('layouts.main')

@section('title')
    PRODUK
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
    
    <!-- start product -->
    <section id="product">
        <div class="container">
            <h4 class="text-heading">produk <span class="text-heading-next">dbs</span></h4>

            @foreach ($products as $item)
            <div class="product__content card">
                    <div class="row">
                        <div class="col m6 s12">
                            <a href="{{route('detail',['id' => $item->id])}}"><img class="responsive-img z-depth-4" src="{{asset('storage/'.$item->cover)}}" /></a>
                        </div>
                        <div class="col m6 s12">
                            <h5 class="product__content-title"><b>{{strtoupper($item->title)}}</b></h5>
                            <p><span class="product__content-category">{{$item->category->name}}</span></p>
                            <p>Harga mulai dari <b> Rp.{{$item->price}}</b></p>
                            <p>{!! Str::limit($item->description, 150, $end=' ...') !!}</p>
                            <a class="waves-effect waves-light btn-small amber accent-4" href="{{route('detail',['id' => $item->id])}}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </section>
    <!-- end product -->
    <br><br>
    <ul class="pagination center-align">
        <li class="waves-effect">{{ $products->links() }}</li>
    </ul>

@endsection