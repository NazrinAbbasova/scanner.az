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
                    <ul id="progressbar">
                        <li data-fieldset="personal" class="active">Şəxsi məlumatlar</li>
                        <li data-fieldset="education">Təhsil məlumatları</li>
                        <li data-fieldset="work">İş təcrübəsi</li>
                        <li data-fieldset="language">Dil bilikləri</li>
                        <li data-fieldset="computer">Kompyuter bilikləri</li>
                        <li data-fieldset="certificates">Sertifikatlar</li>
                    </ul>
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
<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js"type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js"type="text/javascript"></script>

@include('front.inc.ajax')

<script>
    $("#progressbar li").on("click", function () {
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
        $(`#progressbar li[data-fieldset=${field}]`).addClass("active");
        $(`#progressbar li[data-fieldset=${field}]`).siblings().removeClass("active");
    });

    // $(".submit").click(function () {
    //   return false;
    // });

    $(".importance").on("change", function () {
        var select = $(this).data("select");

        $(this).val() == "choose"
            ? $(`[data-s=${select}]`).prop("disabled", true)
            : $(`[data-s=${select}]`).prop("disabled", false);
        $(this).val() == "not-important"
            ? $(`[data-s=${select}]`).prop("disabled", true)
            : $(`[data-s=${select}]`).prop("disabled", false);
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

<link rel="stylesheet" href="{{ asset('static/front/css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('static/front/css/create-vacancy.css') }}">
<script src="{{ asset('static/front/js/create-items.js') }}"></script>

@endsection