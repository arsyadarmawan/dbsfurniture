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
                <div class="breadcrumb-item active"><a href="{{route('order.index')}}">daftar pemesanan</a></div>
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
                          <th>telpon</th>
                          <th>nama barang</th>
                          <th>permintaan pengiriman</th>
                          <th>alamat</th>
                          <th>catatan</th>
                          <th>action</th>
                        </tr>
                        @foreach ($orders as $order)
                          <tr style="text-align: center">
                              <td>{{$order->name}}</td>
                              <td>{{$order->telp}}</td>
                              <td>{{$order->product->title}}</td>
                              <td>{{$order->deliver}}</td>
                              <td>{{$order->address}}</td>
                              <td>{{$order->note}}</td>
                            <td>
                                <form action="{{route('order.destroy',['id' => $order->id ])}}" method="POST" onsubmit="return confirm('Delete this user permanently?')" >
                                  @csrf
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                          </tr>  
                        @endforeach
                        <tfoot>
                      </tfoot>
                      {{ $orders->links() }}
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
            
