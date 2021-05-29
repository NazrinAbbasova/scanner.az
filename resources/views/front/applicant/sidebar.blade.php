<div class="col-lg-3">
    <div class="user-menu">
        <div class="profile-img">
            <form class="text-center" action="{{ route('applicant.photo') }}" enctype="multipart/form-data" method="post">
                <div class="avatar-wrapper">
                    @csrf
                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                    <label class="{{ auth()->user()->photo ? '' : 'avatar-placeholder' }}">
                        <img class="profile-pic" src="{{ auth()->user()->photo ? asset(auth()->user()->photo) : asset('static/front/images/applicant.svg') }}" />
                        <input name="photo" id="upload-avatar" class="file-upload d-none" type="file" accept="image/*" />
                    </label>
                </div>
                <button id="save-avatar"  type="submit">Yadda saxla</button>
            </form>
        </div>
        <ul>
            <li>
                <a href="{{ route('applicant.cv') }}">
                    <i class="fal fa-id-card"></i>
                    <span>CV-im</span>
                </a>
            </li>
            <li>
                <a href="{{ route('cv.create') }}">
                    <i class="fal fa-file-plus"></i>
                    <span>CV yarat</span>
                </a>
            </li>
            <li>
                <a href="{{ route('applicant.vacancies') }}">
                    <i class="fal fa-file-check"></i>
                    <span>Müraciətlərim</span>
                </a>
            </li>
            <li>
                <a href="{{ route('applicant.stats') }}">
                    <i class="fal fa-chart-pie"></i>
                    <span>Ümumi statistika</span>
                </a>
            <li>
                <a href="{{ route('password.edit', ['type' => 'applicant']) }}">
                    <i class="fal fa-key"></i>
                    <span>Şifrəni dəyiş</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}">
                    <i class="fal fa-sign-out"></i>
                    <span>Çıxış</span>
                </a>
            </li>
        </ul>
    </div>
</div>