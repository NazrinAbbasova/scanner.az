<!-- Computer informations -->
<fieldset data-field="computer">
    <h5>Kompyuter bilikləri</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label></label>
            <select data-select="computer" class="importance" name="computer" id="computer">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="computer">Kompyuter bilikləri</label>
            <select data-s="computer" disabled name="computer" id="computer">
                <option>Seç</option>
                @foreach ($skills as $skill)
                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label></label>
            <select data-s="computer" class="importance" name="level" id="level">
                <option>Seç</option>
                <option value="Başlanğıc">Başlanğıc</option>
                <option value="Orta">Orta</option>
                <option value="Yüksək">Yüksək</option>
            </select>
        </div>
        <div class="col-lg-6">
            <input data-field="language" type="button" name="previous"
                class="previous action-button" value="Previous" />
        </div>
        <div class="col-lg-6">
            <input data-field="certificates" type="button" name="next" class="next action-button"value="Next" />
        </div>
</fieldset>