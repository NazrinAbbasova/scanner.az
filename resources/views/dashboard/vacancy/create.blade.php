@extends('dashboard.master')
@section('title', 'Vacancies')
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
                  <h4 class="box-title">Vacancies</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            {{-- Age --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age<span class="required">*</span></label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Age --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nationality<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Azerbaijani</option>
                                        <option value="1">Russian</option>
                                        <option value="2">Turkish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Sex --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sex<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Marital status --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Marital status<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Single</option>
                                        <option value="1">Married</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Military obligation --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Military obligation<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Obligated</option>
                                        <option value="1">Free</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Driver license --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Driver license<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Owns</option>
                                        <option value="1">Does not own</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Driver license category --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Driver license<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="A1">A1</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="BE">BE</option>
                                        <option value="CE">CE</option>
                                        <option value="DE">DE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Mobile --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>

                            {{-- Landline --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Landline</label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>

                            {{-- Linkedin --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Linkedin</label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>

                            {{-- Education --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Education<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="1">Middle school</option>
                                        <option value="2">High school</option>
                                        <option value="3">Bachelors</option>
                                        <option value="4">Master</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>
                            
                            {{-- Exam score --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Exam score<span class="required">*</span></label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Field --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Field<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">IT</option>
                                        <option value="0">Economy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Profession --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Profession<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">IT</option>
                                        <option value="0">Economy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Accepted<span class="required">*</span></label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Graduated<span class="required">*</span></label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>

                            {{-- Experience --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experience<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">IT</option>
                                        <option value="0">Economy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Company --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company<span class="required">*</span></label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>

                            {{-- Function --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Function<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Leader</option>
                                        <option value="0">Accountant</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Job roles --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job roles<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Leader</option>
                                        <option value="0">Accountant</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Obligations --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Obligations<span class="required">*</span></label>
                                    <input type="text" required class="form-control" value="" name="group" />
                                </div>
                            </div>

                            {{-- Empoyment duration --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Empoyment duration<span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Languages --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Languages<span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Level<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Elementry</option>
                                        <option value="1">Intermediate</option>
                                        <option value="2">Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Computer knowledge --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Computer knowledge<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Javascript</option>
                                        <option value="0">Php</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Certificates --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Certificates<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Level<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Elementry</option>
                                        <option value="1">Intermediate</option>
                                        <option value="2">Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Verification URL<span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Salary expectation</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            
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