@extends('front.layout.master')
@section('title', 'Bütün vakansiyalar')
@section('content')
<section class="profile margin-page">
    <div class="container">
        <div class="row">
            @include('front.company.sidebar')
            <div class="col-xl-9 col-lg-9 m-b30">
                <div class="applicants table-applicants">
                    <div class="applicants-title">
                        <h5>Müraciət edən namizədlər</h5>
                    </div>
                    <div class="actions">
                        <div class="filter">
                            <ul>
                                <li class="filter-fails">Tələbi ödəməyənlər</li>
                                <li class="filter-percentage">80%+</li>
                                <li class="filter-percentage">90%+</li>
                                <li class="filter-percentage">100%+</li>
                            </ul>
                        </div>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="operations">Əməliyyatlar</button>
                    </div>

                    <table class="applicants-list">
                        <thead class="applicants-head">
                            <tr>
                                <th scope="col">Foto</th>
                                <th scope="col">Ad və soyad</th>
                                <th scope="col">Vakansiyaya uyğunluq faizi</th>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <tr>
                                <td><img class="applicant-img" style="width:20%" src="assets/images/avatar.png"
                                        alt=""></td>
                                <td class="applicant-fullname">Nəzrin Abbasova</td>
                                <td class="percentage">70%</td>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img class="applicant-img" style="width:20%" src="assets/images/avatar.png"
                                        alt=""></td>
                                <td class="applicant-fullname">Nəzrin Abbasova</td>
                                <td class="percentage">70%</td>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img class="applicant-img" style="width:20%" src="assets/images/avatar.png"
                                        alt=""></td>
                                <td class="applicant-fullname">Nəzrin Abbasova</td>
                                <td class="percentage">70%</td>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img class="applicant-img" style="width:20%" src="assets/images/avatar.png"
                                        alt=""></td>
                                <td class="applicant-fullname">Nəzrin Abbasova</td>
                                <td class="percentage">70%</td>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img class="applicant-img" style="width:20%" src="assets/images/avatar.png"
                                        alt=""></td>
                                <td class="applicant-fullname">Nəzrin Abbasova</td>
                                <td class="percentage">70%</td>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img class="applicant-img" style="width:20%" src="assets/images/avatar.png"
                                        alt=""></td>
                                <td class="applicant-fullname">Nəzrin Abbasova</td>
                                <td class="percentage">70%</td>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img class="applicant-img" style="width:20%" src="assets/images/avatar.png"
                                        alt=""></td>
                                <td class="applicant-fullname">Nəzrin Abbasova</td>
                                <td class="percentage">70%</td>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><img class="applicant-img" style="width:20%" src="assets/images/avatar.png"
                                        alt=""></td>
                                <td class="applicant-fullname">Nəzrin Abbasova</td>
                                <td class="percentage">70%</td>
                                <td class="percentage"><input type="checkbox"></td>
                            </tr>
                    </table>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Seçilmiş namizədlər üzrə əməliyyatlar
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <button>Təsdiq mesajı göndər</button>
                            <button>İmtina mesajı göndər</button>
                            <button>CV-ləri yüklə</button>
                            <button>CV-ləri mailə göndər</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('load')
    @include('front.company.load')
    <link rel="stylesheet" href="{{ asset('static/front/css/applicants.css') }}">
@endsection