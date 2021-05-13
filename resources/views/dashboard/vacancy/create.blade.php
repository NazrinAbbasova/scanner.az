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
                    <form action="{{ route('vacancy.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            {{-- Age --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age<span class="required">*</span></label>
                                    <input type="text" required class="form-control" name="age" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="age_importance" class="form-control">
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
                                    <select name="nationality" class="form-control">
                                        <option value="Azerbaijani">Azerbaijani</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Turkish">Turkish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="nationality_importance" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Gender --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender<span class="required">*</span></label>
                                    <select name="gender" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="gender_importance" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Military obligation --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Military obligation<span class="required">*</span></label>
                                    <select name="military" class="form-control">
                                        <option value="0">Obligated</option>
                                        <option value="1">Free</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="military_importance"  class="form-control">
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
                                    <select name="driver_license"  class="form-control">
                                        <option value="0">Owns</option>
                                        <option value="1">Does not own</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="driver_license_importance"  class="form-control">
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
                                    <label>Driver license category<span class="required">*</span></label>
                                    <select name="driver_license_category"  class="form-control">
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
                                    <select name="driver_license_category_importance"  class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Education --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Education<span class="required">*</span></label>
                                    <select name="education"  class="form-control">
                                        <option value="Middle school">Middle school</option>
                                        <option value="High school">High school</option>
                                        <option value="Bachelors">Bachelors</option>
                                        <option value="Master">Master</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="education_importance"  class="form-control">
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
                                    <input type="text" required class="form-control" name="exam_score" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="exam_score_importance"  class="form-control">
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
                                    <select name="field" class="form-control">
                                        <option value="0">IT</option>
                                        <option value="0">Economy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="field_importance"  class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Experience --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experience<span class="required">*</span></label>
                                    <select name="experience"  class="form-control">
                                        <option value="IT">IT</option>
                                        <option value="Economy">Economy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="experience_importance" class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Function --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Function<span class="required">*</span></label>
                                    <select name="function"  class="form-control">
                                        <option value="Leader">Leader</option>
                                        <option value="Accountant">Accountant</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="function_importance"  class="form-control">
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
                                    <select name="rob_role"  class="form-control">
                                        <option value="Leader">Leader</option>
                                        <option value="Accountant">Accountant</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="job_role_important"  class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Employment duration --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employment duration<span class="required">*</span></label>
                                    <input type="text" name="employment_duration" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="employment_duration_importance"  class="form-control">
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
                                    <select name="languages[]"  class="form-control">
                                        <option value="Azerbaijani">Azerbaijani</option>
                                        <option value="Russian">Russian</option>
                                        <option value="English">English</option>
                                        <option value="Italian">Italian</option>
                                        <option value="German">German</option>
                                        <option value="French">French</option>
                                        <option value="Arabian">Arabian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Level<span class="required">*</span></label>
                                    <select name="language_levels[]"  class="form-control">
                                        <option value="0">Elementry</option>
                                        <option value="1">Intermediate</option>
                                        <option value="2">Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="language_importances[]"  class="form-control">
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
                                    <select name="computer_knowledges[]"  class="form-control">
                                        <option value="0">Javascript</option>
                                        <option value="0">Php</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Level<span class="required">*</span></label>
                                    <select name="computer_knowledge_levels[]"  class="form-control">
                                        <option value="Elementry">Elementry</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Advanced">Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="computer_knowledge_importances[]"  class="form-control">
                                        <option value="0">Not important</option>
                                        <option value="1">Less important</option>
                                        <option value="2">Important</option>
                                        <option value="3">Mandatory</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Certificates --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Certificates<span class="required">*</span></label>
                                    <select name="certificates[]"  class="form-control">
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
                                    <select name="certificate_levels[]"  class="form-control">
                                        <option value="0">Elementry</option>
                                        <option value="1">Intermediate</option>
                                        <option value="2">Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Importance<span class="required">*</span></label>
                                    <select name="certificate_importances[]"  class="form-control">
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
                                    <input type="text" name="salary_expectation" class="form-control">
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