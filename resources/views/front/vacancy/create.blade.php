@extends('front.layout.master')
@section('title', 'Yeni vakansiya')
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.company.sidebar')
            <div class="col-xl-9 col-lg-9 m-b30">
                <form id="vacancy-form" method="post" action="{{ route('vacancies.store') }}">
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

        $(cln).find(`[data-s=${input}]`).attr("disabled", true);
        $(cln).find(`[data-level=${input}]`).attr("disabled", true);

        $(parent_field).append(cln);
    });
</script>

<link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('static/front/css/create-vacancy.css') }}">
<script src="{{ asset('static/front/js/create-items.js') }}"></script>

@endsection