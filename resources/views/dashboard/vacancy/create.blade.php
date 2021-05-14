@extends('dashboard.master')
@section('title', 'Yeni vakansiya')
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
                  <h4 class="box-title">Yeni vakansiya</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('vacancy.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Yaş<span class="required">*</span></label>
                                    <input type="text" required class="form-control" name="age" />
                                </div>
                            </div>
                            
                            @include('dashboard.vacancy.importance', ['name' => 'age_importance'])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vətəndaşlıq<span class="required">*</span></label>
                                    <select name="nationality" class="form-control">
                                        <option value="Azərbaycanlı">Azərbaycanlı</option>
                                        <option value="Rus">Rus</option>
                                        <option value="Türk">Türk</option>
                                        <option value="Alman">Alman</option>
                                    </select>
                                </div>
                            </div>

                            @include('dashboard.vacancy.importance', ['name' => 'nationality_importance'])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cins<span class="required">*</span></label>
                                    <select name="gender" class="form-control">
                                        <option value="Kişi">Kişi</option>
                                        <option value="Qadın">Qadın</option>
                                    </select>
                                </div>
                            </div>

                            @include('dashboard.vacancy.importance', ['name' => 'gender_importance'])
    

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hərbi mükəlləfiyyət<span class="required">*</span></label>
                                    <select name="military" class="form-control">
                                        <option value="Var">Var</option>
                                        <option value="Yoxdur">Yoxdur</option>
                                    </select>
                                </div>
                            </div>
                            @include('dashboard.vacancy.importance', ['name' => 'military_importance'])
                            

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sürücülük vəsiqəsi<span class="required">*</span></label>
                                    <select name="driver_license"  class="form-control">
                                        <option value="Var">Var</option>
                                        <option value="Yoxdur">Yoxdur</option>
                                    </select>
                                </div>
                            </div>

                            @include('dashboard.vacancy.importance', ['name' => 'driver_license_importance'])

                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sürücülük vəsiqəsinin kateqoriyası<span class="required">*</span></label>
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

                            @include('dashboard.vacancy.importance', ['name' => 'driver_license_category_importance'])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Təhsil<span class="required">*</span></label>
                                    <select name="education"  class="form-control">
                                        <option value="Orta məktəb">Orta məktəb</option>
                                        <option value="Peşə məktəbi">Peşə məktəbi</option>
                                        <option value="Bakalavr">Bakalavr</option>
                                        <option value="Magistr">Magistr</option>
                                    </select>
                                </div>
                            </div>
                            
                            @include('dashboard.vacancy.importance', ['name' => 'education_importance'])
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Qəbul balı<span class="required">*</span></label>
                                    <input type="text" required class="form-control" name="exam_score" />
                                </div>
                            </div>
                            
                            @include('dashboard.vacancy.importance', ['name' => 'exam_score_importance'])

                            {{-- Field --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>İxtisas istiqaməti<span class="required">*</span></label>
                                    <select name="field" class="form-control">
                                        <option value="İT">İT</option>
                                        <option value="İqtisadiyyat">İqtisadiyyat</option>
                                    </select>
                                </div>
                            </div>

                            @include('dashboard.vacancy.importance', ['name' => 'field_importance'])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>İş təcrübəsi<span class="required">*</span></label>
                                    <select name="experience"  class="form-control">
                                        <option value="İT">İT</option>
                                        <option value="İqtisadiyyat">İqtisadiyyat</option>
                                    </select>
                                </div>
                            </div>
                            @include('dashboard.vacancy.importance', ['name' => 'experience_importance'])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Funksiya<span class="required">*</span></label>
                                    <select name="function"  class="form-control">
                                        <option value="Leader">Rəhbər</option>
                                        <option value="Accountant">Mühasib</option>
                                    </select>
                                </div>
                            </div>

                            @include('dashboard.vacancy.importance', ['name' => 'function_importance'])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vəzifə kateqoriyası<span class="required">*</span></label>
                                    <select name="job_role"  class="form-control">
                                        <option value="Leader">Rəhbər</option>
                                        <option value="Accountant">Mühasib</option>
                                    </select>
                                </div>
                            </div>
                            
                            @include('dashboard.vacancy.importance', ['name' => 'job_role_importance'])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>İş stajı<span class="required">*</span></label>
                                    <input type="text" name="employment_duration" class="form-control">
                                </div>
                            </div>

                            @include('dashboard.vacancy.importance', ['name' => 'employment_duration_importance'])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Dil biliyi<span class="required">*</span></label>
                                    @include('dashboard.vacancy.languages')
                                </div>
                            </div>
                            
                            @include('dashboard.vacancy.level', ['name' => 'language_levels[]'])
 
                            @include('dashboard.vacancy.importance', ['name' => 'language_importances[]' , 'n' => 3])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Komtpüter bilikləri<span class="required">*</span></label>
                                    @include('dashboard.vacancy.computer')
                                </div>
                            </div>

                            @include('dashboard.vacancy.level', ['name' => 'computer_knowledge_levels[]'])
                            
                            @include('dashboard.vacancy.importance', ['name' => 'computer_knowledge_importances[]' , 'n' => 3])

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sertifikatlar<span class="required">*</span></label>
                                    @include('dashboard.vacancy.certificates')
                                </div>
                            </div>

                            @include('dashboard.vacancy.level', ['name' => 'certificate_levels[]'])

                            @include('dashboard.vacancy.importance', ['name' => 'certificate_importances[]', 'n' => 3])

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Əmək haqqı gözləntiniz</label>
                                    <input type="text" name="salary_expectation" class="form-control">
                                </div>
                            </div>

                            
                        </div>

                        <button class="btn btn-primary mt-3">
                          Təsdiqlə
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