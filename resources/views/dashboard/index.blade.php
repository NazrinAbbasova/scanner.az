@extends('dashboard.master')

@section('links')
<link rel="stylesheet" href="{{asset("static/dashboard/css/dataTables.bootstrap.min.css")}}">
@endsection

@section('content')
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">

          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

        </div>
        <!-- .animated -->
      </div>
      <!-- /.content -->
@endsection

@section('load')
    <!-- Charting library -->
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>

@include('dashboard.inc.scripts.init')

@endsection