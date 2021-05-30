<!-- Language informations -->
<fieldset data-field="language">
    <h5>Dil bilikləri</h5>
    @include('front.vacancy.components.video')
    <div class="dynamic-fields-language" data-f-parent='language'>
        <div class="dynamic-language" data-f="language">
            @if (isset($vacancy) && count($vacancy->languages))
                @foreach ($vacancy->languages as $l)
                <div class="row">
                    <div class="col-lg-4">
                        <label for=""></label>
                        <select data-select="language" class="importance" name="language_importances[]" id="language">
                            <option value="{{ $l->importance }}">
                                @if ($l->importance == 0) Önəm daşımır
                                @elseif ($l->importance == 1) Az önəm daşıyır
                                @elseif ($l->importance == 3)Önəmlidir
                                @else Mütləqdir
                                @endif    
                            </option>
                            @include('front.vacancy.components.importance')
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="language">Dil</label>
                        <select data-s="language"  name="languages[]" id="language" class="other-input">
                            @foreach ($languages as $language)
                                <option {{ $language->id == $l->language_id ? 'selected' : '' }} value="{{ $language->id }}">{{ $language->name }}</option>
                            @endforeach
                            <option value="Digər">Digər</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="level">Səviyyə</label>
                        <select data-s="language" name="language_levels[]" id="level">
                            <option value="{{ $l->level }}">
                                @if ($l->level == 'Başlanğıc') Başlanğıc
                                @elseif ($l->level == 'Orta')  Orta
                                @else Yüksək
                                @endif    
                            </option>
                            @include('front.vacancy.components.level')
                        </select>
                    </div>
                </div>
                @endforeach
            @else
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
            </div>
            @endif
        </div>
    </div>
    <div class="add-remove">
        <div class="add-language add-input" data-type="language">
            + Əlavə et
        </div>
        <div class="remove-language">
            Sil
        </div>
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