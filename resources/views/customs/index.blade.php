@extends('layouts.global')
@extends('layouts.head')
@section('title')
    DAFTAR PEMESANAN CUSTOM
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DBS FURNITURE</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('order.index')}}">daftar pemesanan kustom</a></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">pemesanan dbs</h2>
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
                    <h4>pemesanan</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped"> 
                        <tr style="text-align: center">
                          <th>nama pelanggan</th>
                          <th>email</th>
                          <th>telpon</th>
                          <th>kategori produk</th>
                          <th>alamat</th>
                          <th>catatan produk</th>
                          <th>berkas</th>
                        </tr>
                        @foreach ($customs as $custom)
                          <tr style="text-align: center">
                            <td>{{$custom->name}}</td>
                            <td>{{$custom->email}}</td>
                            <td>{{$custom->telepon}}</td>
                            <td>{{$custom->category->name}}</td>
                            <td>{{$custom->address}}</td> 
                            <td>{{$custom->description}}</td>
                            <td>
                                  <a href="{{route('custom.show',['id' => $custom->id])}}" class="btn btn-info">download</a>
                                {{-- <form action="{{route('order.destroy',['id' => $order->id ])}}" method="GET" onsubmit="return confirm('Delete this user permanently?')" >
                                  @csrf
                                  <input type="hidden" name="_method" value="download">
                                  <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form> --}}
                            </td>
                          </tr>  
                        @endforeach
                        <tfoot>
                      </tfoot>
                      {{ $customs->links() }}
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
            
