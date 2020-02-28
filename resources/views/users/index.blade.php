@extends('layouts.global')
@extends('layouts.head')
@section('title')
    LIST USERS
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DBS FURNITURE</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#create">pengguna</a></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">user page</h2>
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
            @endif

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Pengguna</h4>
                    <div class="card-header-form">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                          buat user
                      </button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Nama pengguna</th>
                          <th>email dbs</th>
                          <th>Dibuat</th>
                          <th>action</th>
                        </tr>
                        @foreach ($users as $user)
                          <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->created_at}}</td>
                              <td>
                                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal-edit{{$user->id}}">Edit</a> 
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
                    <h5 class="modal-title" id="exampleModalLabel">Buat user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label>Nama</label>
                        <input required type="text" name="name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>email</label>
                        <input required type="email" name="email" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>password</label>
                        <input required type="password" name="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
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