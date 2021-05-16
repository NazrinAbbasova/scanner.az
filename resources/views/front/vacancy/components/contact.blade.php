<!-- Contact informations -->
<fieldset data-field="contact">
    <h5>Əlaqə məlumatları</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label></label>
            <select data-select="address" class="importance" name="address" id="address">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label >Yaşadığı şəhər</label>
            <select data-s="address" class="importance" name="address" id="address">
                <option>Seç</option>
                @foreach ($regions as $region)
                <option value="{{ $region->name }}">{{ $region->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="change-step">
            <div class="row">
                <div class="col-lg-6">
                    <input data-field="personal" type="button" name="previous" class="previous action-button" value="Əvvəlki" />
                </div>
                <div class="col-lg-6">
                    <input data-field="education" type="button" name="next" class="next action-button" value="Növbəti" />
                </div>
            </div>
        </div>
</fieldset>