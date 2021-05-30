<!-- Certificates informations -->
<fieldset data-field="certificates">
    <h5>Sertifikat məlumatları</h5>
    @include('front.vacancy.components.video')
    <div class="dynamic-fields-certificates" data-f-parent="certificates">
        <div class="dynamic-certificates" data-f="certificates">
            @if (isset($vacancy) && $vacancy->certificates)
                @foreach ($vacancy->certificates as $cert)
                <div class="row">
                    <div class="col-lg-4">
                        <label for=""></label>
                        <select data-select="certificates" class="importance" name="certificate_importances[]"
                            id="Certificates">
                            <option value="{{ $cert->importance }}">
                                @if ($cert->importance == 0) Önəm daşımır
                                @elseif ($cert->importance == 1) Az önəm daşıyır
                                @elseif ($cert->importance == 3)Önəmlidir
                                @else Mütləqdir
                                @endif    
                            </option>
                            @include('front.vacancy.components.importance')
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="Certificates">Sertifikat</label>
                        <select data-s="certificates" name="certificates[]" id="certificates" class="other-input">
                            <option value="choose">Seç</option>
                            @foreach ($certificates as $certificate)
                                <option {{ $cert->certificate_id == $certificate->id ? 'selected' : '' }} value="{{ $certificate->id }}">{{ $certificate->name }}</option>
                            @endforeach
                            <option value="Digər">Digər</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="certificates">Sertifikat səviyyəsi</label>
                        <select data-s="certificates" name="certificate_levels[]" id="certificate-level">
                            <option value="{{ $cert->level }}">{{ $cert->level }}</option>
                        </select>
                    </div>
                </div>
                @endforeach
            @else
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
                    <select data-s="certificates" disabled name="certificates[]" id="certificates" class="other-input">
                        <option value="choose">Seç</option>
                        @foreach ($certificates as $certificate)
                            <option value="{{ $certificate->id }}">{{ $certificate->name }}</option>
                        @endforeach
                        <option value="Digər">Digər</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="certificates">Sertifikat səviyyəsi</label>
                    <select data-s="certificates" disabled name="certificate_levels[]" id="certificate-level">
                        <option>Seç</option>
                    </select>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="add-remove">
        <div class="add-certificate add-input" data-type="certificates">
            + Əlavə et
        </div>
        <div class="remove-language">
            Sil
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-4">
            <label for="salary">Minimum əmək haqqı tələbi*</label>
            <input name="min_salary_expectation" value="{{ isset($vacancy) ? $vacancy->min_salary_expectation : old('min_salary_expectation') }}" type="number" placeholder="Min.">
        </div>
        <div class="col-lg-4">
            <label for="salary">Maksimum əmək haqqı tələbi</label>
            <input name="max_salary_expectation" value="{{ isset($vacancy) ? $vacancy->max_salary_expectation : old('max_salary_expectation') }}" type="number" placeholder="Maks.">
        </div>
        <div class="col-lg-4">
            <label for="salary">Vakansiyanın bitmə tarixi</label>
            <input name="expiration_date" value="{{ isset($vacancy) ? $vacancy->expiration_date : old('expiration_date') }}" type="date">
        </div>
    </div>
    <div class="send-to-mail">
        <input type="checkbox" {{ isset($vacancy) && $vacancy->send_resumes == 1 ? 'checked' : '' }} id="sendToMail" name="send_resumes" />
        <label for="sendToMail">Uyğun CV-ləri emailə göndər</label>
    </div>
    <div class="active-vacancy">
        <input checked type="checkbox" {{ isset($vacancy) && $vacancy->isActive == 1 ? 'checked' : '' }} id="active-vacancy" name="isActive" />
        <label for="active-vacancy">Vakansiyanı aktiv et</label>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <input data-field="computer" type="button" name="previous" class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-4">
            <input type="submit" class="save-vacancy" data-bs-toggle="modal" value="Yadda saxla" />
        </div>
        @isset($vacancy)
        <div class="col-lg-4">
            <input class="save-vacancy" data-bs-toggle="modal" data-bs-target="#shareVacancy" type="button" name="share" value="Vakansiyanı paylaş" />
        </div>
        @endisset
    </div>
</fieldset>