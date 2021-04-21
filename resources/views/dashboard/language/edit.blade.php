@extends('dashboard.master')
@section('title', $l->name)
@section('links')
<link rel="stylesheet" href="{{asset("static/dashboard/css/dataTables.bootstrap.min.css")}}">
@endsection
@section('content')
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
          <!--  Traffic  -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="box-title">{{$l->name}}</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('language.update', $l->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name <span class="required">*</span></label>
                            <input type="text" required class="form-control" value="{{$l->name}}" name="name" />
                        </div>
                        <div class="form-group">
                          <label>Slug <span class="required">*</span></label>
                          <input type="text"  {{($l->slug == config('app.locale')) ? "readonly" : ""}}  required class="form-control" value="{{$l->slug}}" name="slug" />
                      </div>

                        <button class="btn btn-primary mt-3">
                          Confirm
                        </button>
                    </form>
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!--  /Traffic -->

          <div class="clearfix"></div>

        </div>
        <!-- .animated -->
      </div>
      <!-- /.content -->

@include('dashboard.inc.scripts.swal')

@endsection