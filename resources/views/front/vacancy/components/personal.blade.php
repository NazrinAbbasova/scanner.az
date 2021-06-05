<!-- Personal informations -->
<fieldset data-field="personal">
    <h5>Şəxsi məlumatlar</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="age" class="importance" name="age_importance" id="birthdate">

                @isset($vacancy)
                    <option value="{{ $vacancy->age_importance }}">
                    @if ($vacancy->age_importance == 0) Önəm daşımır
                    @elseif ($vacancy->age_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->age_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                    </option>
                @endisset

                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="birthdate"> Minimum yaş</label>
            <input data-s="age" value="{{ isset($vacancy) ? $vacancy->min_age : old('min_age') }}" name="min_age" {{ isset($vacancy) ? '' : 'disabled' }} type="number" placeholder="Min.">
        </div>
        <div class="col-lg-4">
            <label for="birthdate">Maksimum yaş</label>
            <input data-s="age" value="{{ isset($vacancy) ? $vacancy->max_age : old('max_age') }}" name="max_age" {{ isset($vacancy) ? '' : 'disabled' }} type="number" placeholder="Maks.">
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="citizenship" class="importance" name="nationality_importance" id="citizenship">
                @isset($vacancy)
                <option value="{{ $vacancy->nationality_importance }}">
                    @if ($vacancy->nationality_importance == 0) Önəm daşımır
                    @elseif ($vacancy->nationality_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->nationality_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="birthdate">Vətəndaşlıq</label>
            <select data-s="citizenship" {{ isset($vacancy) ? '' : 'disabled' }} name="nationality" id="citizenship">
                <option value="choose">Seç</option>
                <option value="Azərbaycanlı" {{ isset($vacancy) && $vacancy->nationality ==  'Azərbaycanlı' ? 'selected' : ''}}>Azərbaycanlı</option>
                <option value="Əcnəbi" {{ isset($vacancy) && $vacancy->nationality ==  'Əcnəbi' ? 'selected' : ''}}>Əcnəbi</option>
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="city" class="importance" name="region_importance" id="gender">
                @isset($vacancy)
                <option value="{{ $vacancy->region_importance }}">
                    @if ($vacancy->region_importance == 0) Önəm daşımır
                    @elseif ($vacancy->region_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->region_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="city">Yaşadığı şəhər</label>
            <select data-s="city" {{ isset($vacancy) ? '' : 'disabled' }} name="region" id="city">
                <option value="choose">Seç</option>
                @foreach ($regions as $region)
                    <option {{ isset($vacancy) && $vacancy->region ==  $region->name ? 'selected' : ''}} value="{{ $region->name }}">{{ $region->name }}</option>
                @endforeach
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="gender" class="importance" name="gender_importance" id="address">
                @isset($vacancy)
                <option value="{{ $vacancy->gender_importance }}">
                    @if ($vacancy->gender_importance == 0) Önəm daşımır
                    @elseif ($vacancy->gender_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->gender_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="gender">Cins</label>
            <select data-s="gender" {{ isset($vacancy) ? '' : 'disabled' }} name="importance" id="gender">
                <option value="choose">Seç</option>
                <option value="Kişi" {{ isset($vacancy) && $vacancy->gender ==  "Kişi" ? 'selected' : ''}}>Kişi</option>
                <option value="Qadın" {{ isset($vacancy) && $vacancy->gender ==  "Qadın" ? 'selected' : ''}}>Qadın</option>
            </select>
        </div>

        <hr>

        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="marital" class="importance" name="marital_importance" id="marital">
                @isset($vacancy)
                <option value="{{ $vacancy->marital_importance }}">
                    @if ($vacancy->marital_importance == 0) Önəm daşımır
                    @elseif ($vacancy->marital_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->marital_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="marital">Ailə vəziyyəti</label>
            <select data-s="marital" {{ isset($vacancy) ? '' : 'disabled' }} name="marital" id="marital">
                <option value="choose">Seç</option>
                <option value="Evli" {{ isset($vacancy) && $vacancy->marital ==  "Evli" ? 'selected' : ''}}>Evli</option>
                <option value="Subay" {{ isset($vacancy) && $vacancy->marital ==  "Subay" ? 'selected' : ''}}>Subay</option>
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="military" class="importance" name="military_importance" id="military">
                @isset($vacancy)
                <option value="{{ $vacancy->military_importance }}">
                    @if ($vacancy->military_importance == 0) Önəm daşımır
                    @elseif ($vacancy->military_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->military_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="military">Hərbi mükəlləfiyyət</label>
            <select data-s="military" {{ isset($vacancy) ? '' : 'disabled' }} name="military" id="military">
                <option value="choose">Seç</option>
                <option value="Var" {{ isset($vacancy) && $vacancy->military ==  "Var" ? 'selected' : ''}}>Var</option>
                <option value="Yoxdur" {{ isset($vacancy) && $vacancy->military ==  "Yoxdur" ? 'selected' : ''}}>Yoxdur</option>
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="driving-lisence" class="importance" name="driver_license_importance" id="driving-lisence">
                @isset($vacancy)
                <option value="{{ $vacancy->driver_license_importance }}">
                    @if ($vacancy->driver_license_importance == 0) Önəm daşımır
                    @elseif ($vacancy->driver_license_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->driver_license_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="driving-lisence">Sürücülük vəsiqəsi</label>
            <select data-s="driving-lisence" {{ isset($vacancy) ? '' : 'disabled' }} name="driver_license" id="driving-lisence">
                <option value="choose">Seç</option>
                <option value="Var" {{ isset($vacancy) && $vacancy->driver_license ==  "Var" ? 'selected' : ''}}>Var</option>
                <option value="Yoxdur" {{ isset($vacancy) && $vacancy->driver_license ==  "Yoxdur" ? 'selected' : ''}}>Yoxdur</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="driving-lisence">Sürücülük vəsiqəsinin kateqoriyası</label>
            <select disabled data-s="driving-lisence" name="driver_license_category" id="lisence-category">
                @if(isset($vacancy) && $vacancy->driver_licence_category)
                    <option value="{{ $vacancy->driver_license_category }}">{{ $vacancy->driver_license_category }}</option>
                @else
                    <option value="choose">Seç</option>
                @endif
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
    <div class="row">
        <div class="col-lg-6">
            <input data-field="about" type="button" name="previous" class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="education" type="button" name="next" class="next action-button" value="Sonrakı" />
        </div>
    </div>
</fieldset>