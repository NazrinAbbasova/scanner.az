<!-- Education informations -->
<fieldset data-field="education">
    <h5>Təhsil məlumatları</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="degree" class="importance" name="education_importance" id="degree">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="degree">Təhsil dərəcəsi</label>
            <select data-s="degree" disabled name="education" id="degree">
                <option>Seç</option>
                <option value="İbtidai təhsil">İbtidai təhsil</option>
                <option value="Orta təhsil">Orta təhsil</option>
                <option value="Peşə təhsili">Peşə təhsili</option>
                <option value="Bakalavr">Bakalavr</option>
                <option value="Magistratura">Magistratura</option>
                <option value="Doktorantura">Doktorantura</option>
            </select>
        </div>
        <hr>
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="score" class="importance" name="score_importance" id="score">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="score">Qəbul balı</label>
            <select data-s="score" disabled name="score" id="score">
                <option>Seç</option>
                <option value="200">200+</option>
                <option value="250">250+</option>
                <option value="300">300+</option>
                <option value="350">350+</option>
                <option value="400">400+</option>
                <option value="450">450+</option>
                <option value="500">500+</option>
                <option value="550">550+</option>
                <option value="600">600+</option>
                <option value="650">650+</option>
            </select>
        </div>
        <div class="col-lg-6">
            <input data-field="personal" type="button" name="previous" class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="work" type="button" name="next" class="next action-button" value="Sonrakı" />
        </div>

</fieldset>