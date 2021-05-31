<!-- Computer informations -->
<fieldset data-field="computer">
    <h5>Kompyuter bilikləri</h5>

    <div class="dynamic-fields-computer" data-f-parent="computer">
        <div class="dynamic-computer" data-f="computer">
            <div class="row">
                <div class="col-lg-4">
                    <label for="computer">Kompyuter bilikləri</label>
                    <select data-s="computer" name="computer_skills[]" id="computer" class="other-input">
                        <option value="choose">Seç</option>
                       @foreach ($skills as $skill)
                           <option value="{{ $skill->name }}">{{ $skill->name }}</option>
                       @endforeach
                       <option value="Digər">Digər</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="level">Səviyyə</label>
                    <select data-level="computer" disabled name="computer_skill_levels[]" id="level">
                        <option value="choose">Seç</option>
                        @include('front.cv.components.level')
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="add-remove">
        <div class="add-computer add-input" data-type="computer">
            + Əlavə et
        </div>
        <!-- <div class="remove-language">
            Sil
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <input data-field="language" type="button" name="previous"
                class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="certificates" type="button" name="next"
                class="next action-button" value="Sonrakı" />
        </div>
    </div>
</fieldset>