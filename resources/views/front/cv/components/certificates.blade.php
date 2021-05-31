<!-- Certificates informations -->
<fieldset data-field="certificates">
    <h5>Sertifikat məlumatları</h5>

    <div class="dynamic-fields-certificates" data-f-parent="certificates">
        <div class="dynamic-certificate" data-f="certificates">
            <div class="row">
                <div class="col-lg-4">
                    <label for="certificates">Sertifikat</label>
                    <select data-s="certificates" name="certificates[]" id="certificates"
                        class="other-input">
                        <option value="choose">Seç</option>
                        @foreach ($certificates as $certificate)
                            <option value="{{ $certificate->name }}">{{ $certificate->name }}</option>
                        @endforeach
                        <option value="Digər">Digər</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="certificates">Sertifikat səviyyəsi</label>
                    <select data-level="certificates" disabled name="certificate_levels[]" id="certificate-level">
                        <option value="choose">Seç</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="certificates">Fayl</label>
                    <div class="certificate-file">
                        <label class="btn btn-outline-primary">
                            <i class="fa fa-file"></i> Sertifikat yüklə <input data-level="certificates" disabled type="file" style="display: none;" name="certificate_files[]">
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="certificates">Sertifikat URL</label>
                    <input data-level="certificates" disabled type="text" name="certificate_urls[]" placeholder="URL daxil edin">
                </div>
            </div>
        </div>
    </div>
    <div class="add-remove">
        <div class="add-certificate add-input" data-type="certificates">
            + Əlavə et
        </div>
        <!-- <div class="remove-language">
            Sil
        </div> -->
    </div>

    <div class="row">
        <div class="col-lg-6">
            <input data-field="computer" type="button" name="previous"
                class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input type="submit" name="save" class="save-vacancy" value="Yadda saxla" />
        </div>
    </div>
</fieldset>