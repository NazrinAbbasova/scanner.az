<!-- Certificates informations -->
<fieldset data-field="certificates">
    <h5>Sertifikat məlumatları</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label></label>
            <select data-select="certificates" class="importance" name="certificates"
                id="Certificates">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="Certificates">Sertifikat</label>
            <select data-s="certificates" disabled name="certificates" id="certificates">
                <option>Seç</option>
                @foreach ($certificates as $certificate)
                <option value="{{ $certificate->id }}">{{ $certificate->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="Certificates">Sertifikat səviyyəsi</label>
            <select data-s="certificates" disabled name="certificate-level" id="certificate-level">
                <option>Seç</option>
            </select>
        </div>
        <input data-field="computer" type="button" name="previous" class="previous action-button" value="Previous" />
</fieldset>