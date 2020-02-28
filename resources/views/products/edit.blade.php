@extends('layouts.global')
@extends('layouts.head')
@section('title')
    EDIT PRODUCT
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DBS Furniture</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{route('product.index')}}">Product</a></div>
              <div class="breadcrumb-item">Edit </div>
              <div class="breadcrumb-item">{{$item->id}} </div>
            </div>
          </div>

          <div class="section-body">
          <h2 class="section-title">Produk {{$item->title}}</h2>
          <p class="section-lead">Hallo {{Auth::user()->name}}</p>
            {{-- status  --}}
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>edit produk</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="container">
                        <form enctype="multipart/form-data" action="{{route('product.update',['id' => $item->id])}}" method="POST" files="true">
                            @csrf
                            <input type="hidden" value="PUT" name="_method">

                            <div class="form-group">
                            <label>Judul Produk</label>
                            <input required type="text" name="title" value="{{$item->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Kategori =>  </label>
                            {{-- <input required type="text" name="name" class="form-control"> --}}
                            <select class="form-control" name="category">
                            <option selected="true" value="{{$item->category_id}}">{{$item->category->name}}</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                            <label>Harga</label>
                            <input required type="number" name="price" value="{{$item->price}}" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea required class="form-control" id="summary-ckeditor" name="desc">{{$item->description}}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Spesifikasi</label>
                              <textarea required class="form-control" id="summary-1" name="specs">{{$item->specification}}</textarea>
                            </div>
                            
                            <div class="form-group">
                              <label>cover</label>
                              <br>
                                <img src="{{asset('storage/'.$item->cover)}}" width="70px"/> 
                                <input  type="file"  name="cover" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>Gambar Produk</label>
                              <br>
                                @foreach (json_decode($item->image) as $key => $img )
                                    <img src="{{asset('storage/'.$img)}}" width="70px"/> 
                                @endforeach
                                <input  type="file" multiple name="image[]" class="form-control">
                            </div>
                            <a class="btn btn-secondary" href="{{route('product.index')}}">Cancel</a>
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </form>

                        </div>
                    </div>
                </div> 
                </div>
            </div>
            </div>
    
            </div>
        </section>
@endsection


@section('javascript')
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script>
      CKEDITOR.replace( 'summary-ckeditor' );
  </script>
    <script>
      CKEDITOR.replace( 'summary-1' );
  </script>
@endsection