<div class="col-xl-3 col-lg-4">
    <div class="user-menu">
        <div class="profile-img">
            <div class="avatar-wrapper">
                <label>
                    <img class="profile-pic" src="{{ asset('static/front/images/avatar.png') }}" />
                    <input class="file-upload d-none" type="file" accept="image/*" />
                </label>
            </div>
        </div>
        <ul>
            <li>
                <a class="active" href="{{ route('company.edit') }}">
                    <i class="fal fa-building"></i>
                    <span>Haqqımızda</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fal fa-id-card"></i>
                    <span>Vakansiyalara bax</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fal fa-file-plus"></i>
                    <span>Vakansiya yarat</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fal fa-chart-pie"></i>
                    <span>Ümumi statistika</span>
                </a>
            </li>
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