<!-- Computer informations -->
<fieldset data-field="computer">
    <h5>Kompyuter bilikləri</h5>
    @include('front.vacancy.components.video')
    <div class="dynamic-fields-computer">
        <div class="dynamic-computer">
            <div class="row">
                <div class="col-lg-4">
                    <label for=""></label>
                    <select data-select="computer" class="importance" name="computer_skill_importances[]" id="computer">
                        @include('front.vacancy.components.importance')
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="computer">Kompyuter bilikləri</label>
                    <select data-s="computer" disabled onchange="createOtherInput(this)" name="computer_skills[]" id="computer" class="other-input">
                        <option>Seç</option>
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="level">Səviyyə</label>
                    <select data-s="computer" disabled name="computer_skill_levels[]" id="level">
                        @include('front.vacancy.components.level')
                    </select>
                </div>
                <div class="other" data-s="computer">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="computer">Komputer biliyi</label>
                            <input type="text" name="computer_skill" placeholder="Komputer biliyini daxil edin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="add-computer">
        + Əlavə et
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