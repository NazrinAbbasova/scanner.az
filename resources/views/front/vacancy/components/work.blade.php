<!-- Work informations -->
<fieldset data-field="work">
    <h5>İş təcrübəsi</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label></label>
            <select data-select="field" class="importance" name="field" id="field">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="field">Sektor</label>
            <select data-s="field" disabled name="field" id="field">
                <option>Seç</option>
                @foreach ($fields as $field)
                    <option value="{{ $field->name }}">{{ $field->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="field">Sektor üzrə iş stajı</label>
            <input disabled data-s="field" name="field_experience" type="number">
        </div>
        <hr>
        <div class="col-lg-4">
            <label></label>
            <select data-select="function" class="importance" name="function" id="function">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="function">Funksiya</label>
            <select data-s="function" disabled name="function" id="function">
                <option>Seç</option>
                @foreach ($funcs as $func)
                <option value="{{ $func->name }}">{{ $func->name }}</option>
                @endforeach
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label></label>
            <select data-select="category" class="importance" name="position_importance" id="category">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="category">Vəzifə kateqoriyası</label>
            <select data-s="category" disabled name="position" id="category">
                <option>Seç</option>
                @foreach ($positions as $position)
                    <option value="{{ $position->name }}">{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label></label>
            <select data-select="worktime" class="importance" name="employment_duration_importance" id="worktime">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label>İş stajı</label>
            <input data-s="worktime" name="employment_duration" disabled type="number">
        </div>
        <div class="col-lg-6">
            <input data-field="education" type="button" name="previous" class="previous action-button" value="Previous" />
        </div>
        <div class="col-lg-6">
            <input data-field="language" type="button" name="next" class="next action-button" value="Next" />
        </div>
</fieldset>