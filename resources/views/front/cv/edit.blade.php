@extends('front.layout.master')
@section('title', 'CV-ni redaktə et')
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.applicant.sidebar')
            <div class="col-lg-9 m-b30">
                <form id="vacancy-form" action="{{ route('cv.update', $cv->id) }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <!-- progressbar -->
                    <ul class="progressbar">
                        <li data-fieldset=" personal" class="active">Şəxsi məlumatlar</li>
                        <li data-fieldset="education">Təhsil məlumatları</li>
                        <li data-fieldset="work">İş<br> təcrübəsi</li>
                        <li data-fieldset="language">Dil bilikləri</li>
                        <li data-fieldset="computer">Kompyuter bilikləri</li>
                        <li data-fieldset="certificates">Sertifikatlar</li>
                    </ul>
                    
                    @include('front.cv.components.personal')
                    @include('front.cv.components.education')
                    @include('front.cv.components.work')
                    @include('front.cv.components.language')
                    @include('front.cv.components.computer')
                    @include('front.cv.components.certificates')                 
                    
                    
                </form>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="shareVacancy" tabindex="-1" aria-labelledby="shareVacancyLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="shareVacancyLabel">Vakansiyanı paylaş</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <label for="share">Linki kopyala</label>
                                    <input type="text" value="www.scanner.az/vacancy-11">
                                </div>
                                <div class="col-lg-2">
                                    <i class=" fal fa-copy"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')

@include('front.cv.scripts')

@include('front.inc.ajax')

<script>
    $(".progressbar li").on("click", function () {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        let fieldset = $(this).data("fieldset");
        $(`fieldset:not([data-field=${fieldset}])`).fadeOut(200);
        $(`fieldset[data-field=${fieldset}]`).fadeIn(200);
     });

    $(".action-button").on("click", function () {
        let field = $(this).data("field");
        $(`fieldset:not([data-field=${field}])`).fadeOut(200);
        $(`fieldset[data-field=${field}]`).fadeIn(200);

        // List active indicator
        $(`.progressbar li[data-fieldset=${field}]`).addClass("active");
        $(`.progressbar li[data-fieldset=${field}]`).siblings().removeClass("active");
    });


    $('#certificates').on('change', function(){ 
        const id = $(this).val()
        console.log(val);
        $.ajax({
            url: "{{ route('certificate.levels') }}",
            method: "post",
            data: {
                id: id,
            },
            success: function (levels) {
                if(levels){
                    $('#certificate-level').html(levels)
                }
            },
        });
    })

    $(".add-input").on("click", function () {
        const input = $(this).data("type");
        const parent_field = document.querySelector(`[data-f-parent=${input}]`);
        const field = document.querySelector(`[data-f=${input}]`);

        const cln = field.cloneNode(true);

        $(cln).find(`[data-level=${input}]`).attr("disabled", true);

        $(parent_field).append(cln);
    });

</script>

<link rel="stylesheet" href="{{ asset('static/front/css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('static/front/css/create-vacancy.css') }}">
<script src="{{ asset('static/front/js/create-items.js') }}"></script>
@endsection