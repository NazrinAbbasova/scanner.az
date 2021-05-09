<div class="col-xl-3 col-lg-4">
    <div class="user-menu">
        <div class="profile-img">
            <form action="{{ route('company.logo') }}" enctype="multipart/form-data" method="post">
            <div class="avatar-wrapper">
                    @csrf
                    <input type="hidden" name="company" value="{{ auth()->user()->company }}">
                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                    <label>
                        <img class="profile-pic" src="{{ auth()->user()->logo ?? asset('static/front/images/avatar.png') }}" />
                        <input name="logo" class="file-upload d-none" type="file" accept="image/*" />
                    </label>
                </div>
                <button type="submit">Save</button>
            </form>
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