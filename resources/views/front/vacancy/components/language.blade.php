<!-- Language informations -->
<fieldset data-field="language">
    <h5>Dil bilikləri</h5>
    @include('front.vacancy.components.video')
    <div class="dynamic-fields-language">
        <div class="dynamic-language">
            <div class="row">
                <div class="col-lg-4">
                    <label for=""></label>
                    <select data-select="language" class="importance" name="language_importances[]" id="language">
                        @include('front.vacancy.components.importance')
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="language">Dil</label>
                    <select data-s="language" disabled  name="languages[]" id="language" class="other-input">
                        <option>Seç</option>
                        @foreach ($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                        @endforeach
                        <option value="Digər">Digər</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="level">Səviyyə</label>
                    <select data-s="language" disabled name="language_levels[]" id="level">
                        @include('front.vacancy.components.level')
                    </select>
                </div>
                <div class="other" data-other="language" data-s="language">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="language">Dil</label>
                            <input type="text" name="language" placeholder="Dili daxil edin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="add-language">
        + Əlavə et
    </div>
    <div class="row">
        <div class="col-lg-6">
            <input data-field="work" type="button" name="previous" class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="computer" type="button" name="next" class="next action-button" value="Sonrakı" />
        </div>
    </div>
</fieldset>