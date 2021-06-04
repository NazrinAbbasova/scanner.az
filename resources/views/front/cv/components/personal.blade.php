<!-- Personal informations -->
<fieldset data-field="personal">
    <h5>Şəxsi məlumatlar</h5>
    <div class="row">
        <div class="col-lg-4">
            <label for="name">Ad</label>
            <input name="firstname" value="{{ isset($cv) ? $cv->firstname : auth()->user()->firstname }}" type="text" placeholder="Adınız">
        </div>
        <div class="col-lg-4">
            <label for="surname">Soyad</label>
            <input name="lastname" value="{{ isset($cv) ? $cv->lastname : auth()->user()->lastname }}" type="text" placeholder="Soyadınız">
        </div>
        <div class="col-lg-4">
            <label for="middlename">Ata adı</label>
            <input name="middlename" type="text" value="{{ isset($cv) ? $cv->middlename : old('middlename') }}" placeholder="Ata adı">
        </div>
        <div class="col-lg-4">
            <label for="birthdate">Doğum tarixi</label>
            <input name="birthdate" type="date">
        </div>
        <div class="col-lg-4">
            <label for="citizenship">Vətəndaşlıq</label>
            <select data-s="citizenship" name="nationality" id="citizenship">
                <option value="choose">Seç</option>
                <option {{ isset($cv) && $cv->nationality == 'Azərbaycanlı' ? 'selected' : '' }} value="Azərbaycanlı">Azərbaycanlı</option>
                <option {{ isset($cv) && $cv->nationality == 'Əcnəbi' ? 'selected' : '' }} value="Əcnəbi">Əcnəbi</option>
            </select>
        </div>

        <div class="col-lg-4">
            <label for="city">Yaşadığınız şəhər</label>
            <select data-s="city" name="region" id="city">
                @if (isset($cv))
                    <option value="{{ $cv->region }}">{{ $cv->region }}</option>
                @endif
                <option value="choose">Seç</option>
                @foreach ($regions as $region)
                    <option value="{{ $region->name }}">{{ $region->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="address">Qeydiyyat ünvanı</label>
            <input name="address" value="{{ isset($cv) ? $cv->address : old('address') }}" type="text" placeholder="Ünvanınız">
        </div>
        <div class="col-lg-4">
            <label for="gender">Cins</label>
            <select data-s="gender" name="gender" id="gender">
                <option value="choose">Seç</option>
                <option {{ isset($cv) && $cv->gender == 'Kişi' ? 'selected' : '' }} value="Kişi">Kişi</option>
                <option {{ isset($cv) && $cv->gender == 'Qadın' ? 'selected' : '' }} value="Qadın">Qadın</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="marital">Ailə vəziyyəti</label>
            <select data-s="marital" name="marital" id="marital">
                <option value="choose">Seç</option>
                <option {{ isset($cv) && $cv->marital == 'Evli' ? 'selected' : '' }} value="Evli">Evli</option>
                <option {{ isset($cv) && $cv->marital == 'Subay' ? 'selected' : '' }} value="Subay">Subay</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="military">Hərbi mükəlləfiyyət</label>
            <select data-s="military" name="military" id="military">
                <option value="choose">Seç</option>
                <option {{ isset($cv) && $cv->military == 'Var' ? 'selected' : '' }} value="Var">Var</option>
                <option {{ isset($cv) && $cv->military == 'Yoxdur' ? 'selected' : '' }} value="Yoxdur">Yoxdur</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="driving-lisence">Sürücülük vəsiqəsi</label>
            <select data-s="driving-lisence" name="driver_license" id="driving-lisence">
                <option value="choose">Seç</option>
                <option {{ isset($cv) && $cv->driver_license == 'Var' ? 'selected' : '' }} value="Var">Var</option>
                <option {{ isset($cv) && $cv->driver_license == 'Yoxdur' ? 'selected' : '' }} value="Yoxdur">Yoxdur</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="driving-lisence">Sürücülük vəsiqəsinin kateqoriyası</label>
            <select data-level="driving-lisence" disabled name="driver_license_category" id="lisence-category">
                @if (isset($cv) && $cv->driver_license_category)
                    <option value="{{ $cv->driver_license_category }}">{{ $cv->driver_license_category }}</option>
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
        <div class="col-lg-4">
            <label for="linkedin">Linkedin profiliniz</label>
            <input name="linkedin" value="{{ isset($cv) ? $cv->linkedin : old('linkedin') }}" type="text" placeholder="Linkedin URL">
        </div>
        <input data-field="education" type="button" name="next" class="next action-button" value="Sonrakı" />
    </div>
</fieldset>