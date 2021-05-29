@extends('front.layout.master')
@section('title', 'Müraciətlərim')
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.applicant.sidebar')
            <div class="col-lg-9 m-b30">
                <div class="created-jobs table-created-jobs">
                    <div class="created-jobs-title">
                        <h5>Müraciət olunmuş vakansiyalar</h5>
                    </div>
                    <table class="jobs-list">
                        <thead class="jobs-head">
                            <tr>
                                <th scope="col">Vakansiyanın adı</th>
                                <th scope="col">Şirkətin adı</th>
                                <th scope="col">Elan olunma tarixi</th>
                                <th scope="col">Uyğunluq faizi</th>
                                <th scope="col">İşə götürəndən mesaj</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="job-name">Front-end developer</td>
                                <td class="profession-name">Kapital Bank</td>
                                <td class="date">December 15,2018</td>
                                <td class="successful-applicants">83%</td>
                                <td class="show-message" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fas fa-envelope"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Vakansiya üçün geri dönüş mesajı
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Siz bu vakansiyanı uğurla keçdiniz!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('load')
    <link rel="stylesheet" href="{{ asset('static/front/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/front/css/created-vacancies.css') }}">
@endsection