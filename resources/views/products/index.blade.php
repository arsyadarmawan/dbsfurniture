@extends('layouts.global')
@extends('layouts.head')
@section('title')
    DAFTAR PRODUK DBS
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DBS FURNITURE</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#create">daftar produk</a></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">produk dbs</h2>
            <p class="section-lead">Hallo {{Auth::user()->name}}</p>
            
            @if(session('status'))
                <div class="alert alert-primary alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{session('status')}}
                    </div>
                </div>
              @elseif(session('delete'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{session('delete')}}
                    </div>
                </div>
            @endif

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>produk</h4>
                    <div class="card-header-form">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                          buat produk
                      </button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped"> 
                        <tr>
                          <th>nama produk</th>
                          <th>harga</th>
                          <th>kategori</th>
                          <th>action</th>
                        </tr>
                        @foreach ($data as $item)
                          <tr>
                              <td>{{$item->title}}</td>
                              <td>{{$item->price}}</td>
                              <td>{{$item->category->name}}</td>
                              <td>
                                <span class="table-action">
                                <a href="{{route('product.edit',['id' => $item->id])}}" class="btn btn-info">Edit</a>
                                <form action="{{route('product.destroy',['id' => $item->id ])}}" method="POST" onsubmit="return confirm('Delete this user permanently?')" >
                                  @csrf
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                              </span>
                              </td>
                          </tr>  
                        @endforeach
                        <tfoot>
                      </tfoot>
                      {{ $data->links() }}
                      </table>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
           
                </div>
              </section>
            </div>
            <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">buat produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label>Judul Produk</label>
                        <input required type="text" name="title" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Kategori</label>
                        {{-- <input required type="text" name="name" class="form-control"> --}}
                        <select class="form-control" name="category">
                          <option disabled="disabled" selected="true" >Pilih Kategori</option>
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Harga</label>
                        <input required type="number" name="price" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea required class="form-control" id="summary-ckeditor" name="desc"></textarea>
                      </div>
                    <div class="form-group">
                        <label>Spesifikasi</label>
                        <textarea required class="form-control" id="summary-1" name="specs"></textarea>
                      </div>
                      <div class="form-group">
                        <label>gambar cover</label>
                      <input required type="file" name="cover" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>ambar pendukung</label>
                        <input required type="file" multiple name="image[]" class="form-control">
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">simpan</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
            </div>
            @endsection
            
           
@section('javascript')
  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script>
      CKEDITOR.replace( 'summary-ckeditor' );
  </script>
    <script>
      CKEDITOR.replace( 'summary-1' );
  </script>
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection