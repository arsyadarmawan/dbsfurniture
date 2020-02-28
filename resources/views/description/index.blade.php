@extends('layouts.global')
@extends('layouts.head')
@section('title')
    PROFIL DBS
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DBS FURNITURE</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('desc.index')}}">Profil DBS</a></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">PROFIL DBS</h2>
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
                        <tr>
                          <th>nama</th>
                          <th>dekripsi</th>
                          <th>aksi</th>
                        </tr>
                        @foreach ($data as $item)
                          <tr >
                              <td>{{$item->name}}</td>
                              <td>{!!$item->description!!}</td>

                            <td>
                                  <a href="{{route('desc.edit',['id' => $item->id])}}" class="btn btn-info">Edit</a>
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
            @endsection
            
