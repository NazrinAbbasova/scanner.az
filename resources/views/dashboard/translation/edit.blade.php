@extends('dashboard.master')
@section('title', $t->key)
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
                  <h4 class="box-title">{{$t->name}}</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('translation.update', $t->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Group<span class="required">*</span></label>
                            <input type="text" readonly required class="form-control" value="{{$t->group}}" name="group" />
                        </div>
                        <div class="form-group">
                          <label>Key <span class="required">*</span></label>
                          <input type="text"required readonly class="form-control" value="{{$t->key}}" name="key" />
                        </div>

                        @foreach ($languages as $l)
                        <div class="form-group">
                            <label>{{$l->name}} <span class="required">*</span></label>
                            <input type="text"required class="form-control" value="{{$t->text[$l->slug]}}" name="{{$l->slug}}" />
                        </div>
                        @endforeach

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