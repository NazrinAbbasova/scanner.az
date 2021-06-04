@if (isset($cv) && count($cv->experiences))
<!-- Work informations -->
<fieldset data-field="work">
    <h5>İş təcrübəsi</h5>
    <div class="dynamic-fields-work" data-f-parent='work'>
        @foreach ($cv->experiences as $exp)
        <div class="dynamic-work" data-f="work">
            <div class="row">
                <div class="col-lg-4">
                    <label for="company-name">Müəssisənin adı</label>
                    <input type="text" value="{{ $exp->company }}" name="companies[]" placeholder="Müəssisənin adı">
                </div>
                <div class="col-lg-4">
                    <label for="function">Funksiya</label>
                    <select name="functions[]" id="function">
                        @if ($exp->function)
                            <option value="{{ $exp->function }}">{{ $exp->function }}</option>
                        @else
                        <option value="choose">Seç</option>
                        @endif
                        @foreach ($funcs as $function)
                            <option value="{{ $function->name }}">{{ $function->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="category">Vəzifə kateqoriyası</label>
                    <select name="positions[]" id="category">
                        @if ($exp->position)
                            <option value="{{ $exp->position }}">{{ $exp->position }}</option>
                        @else
                            <option value="choose">Seç</option>
                        @endif
                        @foreach ($positions as $position)
                            <option value="{{ $position->name }}">{{ $position->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="field">Sektor</label>
                    <select name="fields[]" id="field">
                        @if ($exp->field)
                        <option value="{{ $exp->field }}">{{ $exp->field }}</option>
                        @else
                        <option value="choose">Seç</option>
                        @endif
                        @foreach ($fields as $field)
                            <option value="{{ $field->name }}">{{ $field->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label>İşə qəbul olduğunuz tarix</label>
                    <input name="employment_dates[]" value="{{ $exp->employment_date }}" type="date">
                </div>
                <div class="col-lg-4">
                    <label>İşdən çıxdığınız tarix</label>
                    <input name="unemployment_dates[]" value="{{ $exp->unemployment_date }}" type="date">
                </div>
                <div class="col-lg-10">
                    <label for="commitment">Vəzifə öhdəlikləri</label>
                    <input type="text" name="obligations[]" value="{{ $exp->obligations }}" placeholder="Öhdəliyi daxil et">
                </div>
                <div class="col-lg-2">
                    <div class="add-commitment"><i class="fal fa-plus-square"></i></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="add-remove">
        <div class="add-work add-input" data-type='work'>
            + Əlavə et
        </div>
        <!-- <div class="remove-work">
            Sil
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <input data-field="education" type="button" name="previous"
                class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="language" type="button" name="next" class="next action-button"
                value="Sonrakı" />
        </div>
    </div>

</fieldset>
@else
<!-- Work informations -->
<fieldset data-field="work">
    <h5>İş təcrübəsi</h5>
    <div class="dynamic-fields-work" data-f-parent='work'>
        <div class="dynamic-work" data-f="work">
            <div class="row">
                <div class="col-lg-4">
                    <label for="company-name">Müəssisənin adı</label>
                    <input type="text" name="companies[]" placeholder="Müəssisənin adı">
                </div>
                <div class="col-lg-4">
                    <label for="function">Funksiya</label>
                    <select name="functions[]" id="function">
                        <option value="choose">Seç</option>
                        @foreach ($funcs as $function)
                            <option value="{{ $function->name }}">{{ $function->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="category">Vəzifə kateqoriyası</label>
                    <select name="positions[]" id="category">
                        <option value="choose">Seç</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position->name }}">{{ $position->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="field">Sektor</label>
                    <select name="fields[]" id="field">
                        <option value="choose">Seç</option>
                        @foreach ($fields as $field)
                            <option value="{{ $field->name }}">{{ $field->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label>İşə qəbul olduğunuz tarix</label>
                    <input name="employment_dates[]" type="date">
                </div>
                <div class="col-lg-4">
                    <label>İşdən çıxdığınız tarix</label>
                    <input name="unemployment_dates[]" type="date">
                </div>
                <div class="col-lg-10">
                    <label for="commitment">Vəzifə öhdəlikləri</label>
                    <input type="text" name="obligations[]" placeholder="Öhdəliyi daxil et">
                </div>
                <div class="col-lg-2">
                    <div class="add-commitment"><i class="fal fa-plus-square"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="add-remove">
        <div class="add-work add-input" data-type='work'>
            + Əlavə et
        </div>
        <!-- <div class="remove-work">
            Sil
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <input data-field="education" type="button" name="previous"
                class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="language" type="button" name="next" class="next action-button"
                value="Sonrakı" />
        </div>
    </div>

</fieldset>
@endif