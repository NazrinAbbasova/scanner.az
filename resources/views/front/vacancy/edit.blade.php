@extends('front.layout.master')
@section('title', 'Yeni vakansiya')
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.company.sidebar')
            <div class="col-xl-9 col-lg-9 m-b30">
                <form id="vacancy-form" method="post" action="{{ route('vacancies.update', $vacancy->id) }}">
                    @csrf
                    <!-- progressbar -->
                    <ul class="progressbar create-vacancy">
                        <li data-fieldset="about-vacancy" class="active">Vakansiya haqqında</li>
                        <li data-fieldset="personal">Şəxsi məlumatlar</li>
                        <li data-fieldset="education">Təhsil məlumatları</li>
                        <li data-fieldset="work">İş<br> təcrübəsi</li>
                        <li data-fieldset="language">Dil bilikləri</li>
                        <li data-fieldset="computer">Kompyuter bilikləri</li>
                        <li data-fieldset="certificates">Sertifikatlar</li>
                    </ul>
                    @include('front.vacancy.components.about')
                    @include('front.vacancy.components.personal')
                    @include('front.vacancy.components.education')
                    @include('front.vacancy.components.work')
                    @include('front.vacancy.components.language')
                    @include('front.vacancy.components.computer')
                    @include('front.vacancy.components.certificates')
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
@include('front.vacancy.scripts')

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

        console.log(id);

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
</script>

<!-- Modal -->
<div class="modal fade" id="shareVacancy" tabindex="-1" aria-labelledby="shareVacancyLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="shareVacancyLabel">Vakansiyanı paylaş
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-10">
                    <label for="share">Linki kopyala</label>
                    <input type="text" disabled value="{{ Request::url() }}">
                </div>
                <div class="col-lg-2">
                    <i class=" fal fa-copy"></i>
                </div>
                <div class="col-lg-6">
                    <ul class="share-social">
                        <li><a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url={{ Request::url() }}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"><i class="fab fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://api.whatsapp.com/send?text={{ Request::url() }}"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a target="_blank" href="https://t.me/share/url?url={{ Request::url() }}"><i class="fab fa-telegram-plane"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<link rel="stylesheet" href="{{ asset('static/front/css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('static/front/css/create-vacancy.css') }}">
<script src="{{ asset('static/front/js/create-items.js') }}"></script>

@endsection