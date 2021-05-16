<!-- Language informations -->
<fieldset data-field="language">
    <h5>Dil bilikləri</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label></label>
            <select data-select="language" class="importance" name="language" id="language">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="language">Dil</label>
            <select data-s="language" disabled name="language" id="language">
                <option>Seç</option>
                @foreach ($languages as $language)
                <option value="{{ $language->id }}">{{ $language->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label></label>
            <select data-s="language" class="importance" name="level" id="level">
                <option>Seç</option>
                <option value="Başlanğıc">Başlanğıc</option>
                <option value="Orta">Orta</option>
                <option value="Yüksək">Yüksək</option>
            </select>
        </div>
        <div class="col-lg-6">
            <input data-field="work" type="button" name="previous" class="previous action-button" value="Previous" />
        </div>
        <div class="col-lg-6">
            <input data-field="computer" type="button" name="next" class="next action-button" value="Next" />
        </div>
</fieldset>