<!-- Personal informations -->
<fieldset data-field="personal">
    <div class="row mb-10">
        <div class="col-lg-6">
            <div class="vacancy-name">
                <!-- <label for="vacancy-name">Vakansiyanın adı</label> -->
                <input type="text" placeholder="Vakansiyanın adını daxil edin">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="intro-video-play first">
                <div class="justify-content-center">
                    <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM" class="glightbox video"><i class="lni lni-play"></i> Videotəlimatı izlə</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h5>Şəxsi məlumatlar</h5>
    <div class="row">
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="age" class="importance" name="birthdate" id="birthdate">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="birthdate"> Minimum yaş</label>
            <input data-s="age" disabled type="number" placeholder="Min.">
        </div>
        <div class="col-lg-4">
            <label for="birthdate">Maksimum yaş</label>
            <input data-s="age" disabled type="number" placeholder="Maks.">
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="citizenship" class="importance" name="nationality_importance" id="citizenship">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="birthdate">Vətəndaşlıq</label>
            <select data-s="citizenship" disabled name="nationality" id="citizenship">
                <option value="choose">Azərbaycanlı</option>
                <option value="not-important">Əcnəbi</option>
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="city" class="importance" name="region_importance" id="gender">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="city">Yaşadığı şəhər</label>
            <select data-s="city" disabled name="region" id="city">
                <option value="choose">Seç</option>
                @foreach ($regions as $region)
                    <option value="{{ $region->name }}">{{ $region->name }}</option>
                @endforeach
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="gender" class="importance" name="gender_importance" id="address">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="gender">Cins</label>
            <select data-s="gender" disabled name="importance" id="gender">
                <option value="choose">Seç</option>
                <option value="male">Kişi</option>
                <option value="female">Qadın</option>
            </select>
        </div>

        <hr>

        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="marital" class="importance" name="marital_importance" id="marital">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="marital">Ailə vəziyyəti</label>
            <select data-s="marital" disabled name="marital" id="marital">
                <option value="choose">Seç</option>
                <option value="male">Evli</option>
                <option value="female">Subay</option>
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="military" class="importance" name="military_importance" id="military">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="military">Hərbi mükəlləfiyyət</label>
            <select data-s="military" disabled name="military" id="military">
                <option value="choose">Seç</option>
                <option value="not-important">Var</option>
                <option value="less-important">Yoxdur</option>
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="driving-lisence" class="importance" name="driving_license_importance" id="driving-lisence">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="driving-lisence">Sürücülük vəsiqəsi</label>
            <select data-s="driving-lisence" disabled name="driving_license" id="driving-lisence">
                <option value="choose">Seç</option>
                <option value="not-important">Var</option>
                <option value="less-important">Yoxdur</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="driving-lisence">Sürücülük vəsiqəsinin kateqoriyası</label>
            <select disabled data-s="driving-lisence" name=" driving_license_category" id="lisence-category">
                <option value="choose">Seç</option>
                <option value="A1">A1</option>
                <option value="A">A</option>
                <option value="B1">B1</option>
                <option value="B">B</option>
                <option value="C1">C1</option>
                <option value="C">C</option>
                <option value="D1">D1</option>
                <option value="D">D</option>
                <option value="BE">BE</option>
                <option value="C1E">C1E</option>
                <option value="CE">CE</option>
                <option value="D1E">D1E</option>
                <option value="DE">DE</option>
            </select>
        </div>
    </div>
    <input data-field="education" type="button" name="next" class="next action-button" value="Sonrakı" />
</fieldset>