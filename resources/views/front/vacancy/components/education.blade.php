<!-- Education informations -->
<fieldset data-field="education">
    <h5>Təhsil məlumatları</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label></label>
            <select data-select="degree" class="importance" name="degree" id="degree">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="degree">Təhsil dərəcəsi</label>
            <select data-s="degree" disabled name="degree" id="degree">
                <option>Seç</option>
                <option value="Orta">Orta</option>
                <option value="Peşə">Peşə</option>
                <optgroup label="Ali">
                    <option value="Bakalavr">Bakalavr</option>
                    <option value="Magistr">Magistr</option>
                    <option value="Doktorantura">Doktorantura</option>
                </optgroup>
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label></label>
            <select data-select="score" class="importance" name="score" id="score">
                <option>Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="score">Qəbul balı</label>
            <input data-s="score" disabled type="text" placeholder="Bal">
        </div>
        <div class="col-lg-6">
            <input data-field="contact" type="button" name="previous" class="previous action-button" value="Previous" />
        </div>
        <div class="col-lg-6">
            <input data-field="work" type="button" name="next" class="next action-button" value="Next" />
        </div>

</fieldset>