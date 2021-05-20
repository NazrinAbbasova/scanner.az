@extends('front.layout.master')
@section('title', 'Bütün vakansiyalar')
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.company.sidebar')
            <div class="col-xl-9 col-lg-9 m-b30">
                <div class="created-jobs table-created-jobs">
                    <div class="created-jobs-title">
                        <h5>Bütün vakansiyalar</h5>
                    </div>
                    <table class="jobs-list">
                        <thead class="jobs-head">
                            <tr>
                                <th scope="col">Vakansiyanın adı</th>
                                <th scope="col">Aid olduğu sahə</th>
                                <th scope="col">Elan olunma tarixi</th>
                                <th scope="col">Müraciət edənlərin sayı</th>
                                <th scope="col">Uğurlu namizədlərin sayı</th>
                                <th scope="col">Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="job-name">Front-end developer</td>
                                <td class="profession-name">Proqramlaşdırma</td>
                                <td class="date">December 15,2018</td>
                                <td class="common-applicants">134</td>
                                <td class="successful-applicants">
                                    <a href="applicants.html">23</a>
                                </td>
                                <td>
                                    <a href="">
                                        <i class=" fal fa-copy"></i>
                                    </a>
                                    <a href="">
                                        <i class="fal fa-edit"></i>
                                    </a>
                                    <a href="">
                                        <i class="fal fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
    @include('front.company.load')
    <link rel="stylesheet" href="{{ asset('static/front/css/created-vacancies.css') }}">
@endsection