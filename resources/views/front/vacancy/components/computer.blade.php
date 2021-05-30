<!-- Computer informations -->
<fieldset data-field="computer">
    <h5>Kompyuter bilikləri</h5>
    @include('front.vacancy.components.video')
    <div class="dynamic-fields-computer" data-f-parent="computer">
        <div class="dynamic-computer" data-f="computer">
            @if (isset($vacancy) && $vacancy->computer_skills)
            @foreach ($vacancy->computer_skills as $c_skill)
            <div class="row">
                <div class="col-lg-4">
                    <label for=""></label>
                    <select data-select="computer" class="importance" name="computer_skill_importances[]" id="computer">
                        <option value="{{ $c_skill->importance }}">
                            @if ($c_skill->importance == 0) Önəm daşımır
                            @elseif ($c_skill->importance == 1) Az önəm daşıyır
                            @elseif ($c_skill->importance == 3)Önəmlidir
                            @else Mütləqdir
                            @endif    
                        </option>
                        @include('front.vacancy.components.importance')
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="computer">Kompyuter bilikləri</label>
                    <select data-s="computer"  name="computer_skills[]" id="computer" class="other-input">
                        <option value="choose">Seç</option>
                        @foreach ($skills as $skill)
                            <option {{ $skill->id == $c_skill->computer_skill_id ? 'selected' : '' }}  value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                        <option value="Digər">Digər</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="level">Səviyyə</label>
                    <select data-s="computer" name="computer_skill_levels[]" id="level">
                        <option value="{{ $c_skill->level }}">
                            @if ($c_skill->level == 'Başlanğıc') Başlanğıc
                            @elseif ($c_skill->level == 'Orta')  Orta
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
                    <select data-select="computer" class="importance" name="computer_skill_importances[]" id="computer">
                        @include('front.vacancy.components.importance')
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="computer">Kompyuter bilikləri</label>
                    <select data-s="computer" disabled  name="computer_skills[]" id="computer" class="other-input">
                        <option value="choose">Seç</option>
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                        <option value="Digər">Digər</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="level">Səviyyə</label>
                    <select data-s="computer" disabled name="computer_skill_levels[]" id="level">
                        @include('front.vacancy.components.level')
                    </select>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="add-remove">
        <div class="add-computer add-input" data-type="computer">
            + Əlavə et
        </div>
        <div class="remove-language">
            Sil
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <input data-field="language" type="button" name="previous" class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="certificates" type="button" name="next" class="next action-button" value="Sonrakı" />
        </div>
    </div>
</fieldset>