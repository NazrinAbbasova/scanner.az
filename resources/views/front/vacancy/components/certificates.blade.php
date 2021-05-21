<!-- Certificates informations -->
<fieldset data-field="certificates">
    <h5>Sertifikat məlumatları</h5>
    @include('front.vacancy.components.video')
    <div class="dynamic-fields-certificate">
        <div class="dynamic-certificate">
            <div class="row">
                <div class="col-lg-4">
                    <label for=""></label>
                    <select data-select="certificates" class="importance" name="certificate_importances[]"
                        id="Certificates">
                        @include('front.vacancy.components.importance')
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="Certificates">Sertifikat</label>
                    <select data-s="certificates" disabled onchange="createOtherInput(this)" name="certificates[]" id="certificates" class="other-input">
                        <option>Seç</option>
                        @foreach ($certificates as $certificate)
                            <option value="{{ $certificate->id }}">{{ $certificate->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="certificates">Sertifikat səviyyəsi</label>
                    <select data-s="certificates" disabled name="certificate-levels[]" id="certificate-level">
                        <option>Seç</option>
                    </select>
                </div>
                <div class="other" data-s="certificates">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="certificates">Sertifikat</label>
                            <input type="text" name="certificate" placeholder="Sertifikatı daxil edin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="add-certificate">
        + Əlavə et
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-4">
            <label for="salary">Minimum əmək haqqı tələbi</label>
            <input name="min_salary_expectation" type="number" placeholder="Min.">
        </div>
        <div class="col-lg-4">
            <label for="salary">Maksimum əmək haqqı tələbi</label>
            <input name="max_salary_expectation" type="number" placeholder="Maks.">
        </div>
        <div class="col-lg-4">
            <label for="salary">Vakansiyanın bitmə tarixi</label>
            <input name="expiration_date" type="date">
        </div>
    </div>
    <div class="send-to-mail">
        <input type="checkbox" id="sendToMail" name="sendToMail" />
        <label for="sendToMail">Uyğun CV-ləri emailə göndər</label>
    </div>
    <div class="active-vacancy">
        <input checked type="checkbox" id="active-vacancy" name="active-vacancy" />
        <label for="active-vacancy">Vakansiyanı aktiv et</label>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <input data-field="computer" type="button" name="previous" class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-4">
            <input type="submit" class="save-vacancy" data-bs-toggle="modal" value="Yadda saxla" />
        </div>
        <div class="col-lg-4">
            <input class="save-vacancy" data-bs-toggle="modal" data-bs-target="#shareVacancy" type="button" name="share" value="Vakansiyanı paylaş" />
        </div>
    </div>
</fieldset>