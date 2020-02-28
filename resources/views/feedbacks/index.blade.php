@extends('layouts.global')
@extends('layouts.head')
@section('title')
    FEEDBACK PELANGGAN
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DBS FURNITURE</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#create">feedback pelanggan</a></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">feedback dbs</h2>
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
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped"> 
                        <tr>
                          <th>nama pelanggan</th>
                          <th>email</th>
                          <th>telepon</th>
                          <th>note</th>
                          <th></th>
                        </tr>
                        @foreach ($feedbacks as $item)
                          <tr>
                              <td>{{$item->name}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->telp}}</td>
                            <td>{{$item->note}}</td>
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