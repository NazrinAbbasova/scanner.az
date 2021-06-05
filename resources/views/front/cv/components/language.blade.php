<!-- Language informations -->
@if (isset($cv) && count($cv->languages))
<fieldset data-field="language">
    <h5>Dil bilikləri</h5>
    <div class="dynamic-fields-language" data-f-parent='language'>
        @foreach ($cv->languages as $l)
        <div class="dynamic-language" data-f="language">
            <div class="row">
                <div class="col-lg-4">
                    <label for="language">Dil</label>
                    <select data-s="language" name="languages[]" id="language" class="other-input">
                        <option value="{{ $l->language }}">{{ $l->language }}</option>
                        <option value="choose">Seç</option>
                        @foreach ($languages as $language)
                            <option value="{{ $language->name }}">{{ $language->name }}</option>
                        @endforeach
                        <option value="Digər">Digər</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="level">Səviyyə</label>
                    <select data-level="language" name="language_levels[]" id="level">
                        <option value="{{ $l->level }}">{{ $l->level }}</option>
                        @include('front.cv.components.level')
                    </select>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="add-remove">
        <div class="add-language add-input" data-type='language'>
            + Əlavə et
        </div>
        <div class="remove-language">
            Sil
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <input data-field="work" type="button" name="previous"
                class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="computer" type="button" name="next" class="next action-button"
                value="Sonrakı" />
        </div>
    </div>
</fieldset>
@else
<fieldset data-field="language">
    <h5>Dil bilikləri</h5>
    <div class="dynamic-fields-language" data-f-parent='language'>
        <div class="dynamic-language" data-f="language">
            <div class="row">
                <div class="col-lg-4">
                    <label for="language">Dil</label>
                    <select data-s="language" name="languages[]" id="language" class="other-input">
                        <option value="choose">Seç</option>
                        @foreach ($languages as $language)
                            <option value="{{ $language->name }}">{{ $language->name }}</option>
                        @endforeach
                        <option value="Digər">Digər</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="level">Səviyyə</label>
                    <select data-level="language" disabled name="language_levels[]" id="level">
                        <option value="choose">Seç</option>
                        @include('front.cv.components.level')
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="add-remove">
        <div class="add-language add-input" data-type='language'>
            + Əlavə et
        </div>
        <div class="remove-language">
            Sil
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <input data-field="work" type="button" name="previous"
                class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="computer" type="button" name="next" class="next action-button"
                value="Sonrakı" />
        </div>
    </div>
</fieldset>
@endif