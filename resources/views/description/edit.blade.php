  @extends('layouts.global')
  @extends('layouts.head')
  @section('title')
    PROFILE DBS
  @endsection
  @section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>DBS FURNITURE</h1>
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Konten</a></div>
              <div class="breadcrumb-item">deskripsi</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">DBS Furniture </h2>
            <p class="section-lead">Hallo {{Auth::user()->name}}</p>
            {{-- status  --}}
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
            
            <form enctype="multipart/form-data" action="{{route('desc.update',['id' => $description->id])}}" method="POST">
                @csrf
                <input type="hidden" value="PUT" name="_method">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Profil DBS</h4>
                      </div>
                      <div class="card-body">
                      <div class="form-group">
                        <label>Kolom</label>
                          <input type="text"  value="{{$description->name}}" name="name" class="form-control">
                      </div>

                        {{-- deskripsi --}}
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <textarea class="form-control" id="summary-ckeditor" name="desc">
                              {{ $description->description }}
                            </textarea>
                            <div class="invalid-feedback">      
                            </div>
                          </div>
                        </div>
    
                        <div class="form-group">
                        <label class="col-form-label col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary" value="Save" type="submit">update</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </form>
          </div>
        </section>
      </div>
  @endsection

  @section('javascript')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
  @endsection