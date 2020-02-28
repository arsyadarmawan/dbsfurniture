@extends('layouts.global')
@extends('layouts.head')
@section('title')
    DAFTAR KATEGORI
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DBS FURNITURE</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#create">kategori produk</a></div>
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
                    <h4>Pengguna</h4>
                    <div class="card-header-form">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                          buat kategori
                      </button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          {{-- <th>id</th> --}}
                          <th>nama kategori</th>
                          <th>deskripsi</th>
                          <th>action</th>
                        </tr>
                        @foreach ($data as $item)
                          <tr>
                              {{-- <td>{{$item->id}}</td> --}}
                              <td>{{$item->name}}</td>
                              <td>{{$item->description}}</td>
                              {{-- <td>{{$item->created_at}}</td> --}}
                              <td>
                              <form action="{{route('category.destroy',['id' => $item->id ])}}" method="POST" onsubmit="return confirm('Delete this user permanently?')" >
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                              </td>
                          </tr>  
                        @endforeach
                        <tfoot>
                      </tfoot>
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
                    <h5 class="modal-title" id="exampleModalLabel">Buat Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label>Nama Kategori</label>
                        <input required type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" id="summary-ckeditor" name="desc"></textarea>
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
    
@endsection