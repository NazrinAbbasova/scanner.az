<!-- Work informations -->
<fieldset data-field="work">
    <h5>İş təcrübəsi</h5>
    @include('front.vacancy.components.video')
    <div class="row">

        {{-- Field --}}
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="field" class="importance" name="field_importance" id="field">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="field">Sektor</label>
            <select data-s="field" disabled name="field" id="field">
                <option>Seç</option>
                @foreach ($fields as $field)
                    <option value="{{ $field->name }}">{{ $field->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="start-work">Minimum iş stajı</label>
            <input data-s="field" disabled type="number" name="field_employment_duration" placeholder="Müddət">
        </div>
        <hr>

        {{-- Function --}}

        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="function" class="importance" name="function_importance" id="function">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="function">Funksiya</label>
            <select data-s="function" disabled name="function" id="function">
                <option>Seç</option>
                @foreach ($funcs as $function)
                    <option value="{{ $function->name }}">{{ $function->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="start-work">Minimum iş stajı</label>
            <input data-s="function" disabled type="number" placeholder="Müddət" name="function_employment_duration">
        </div>
        <hr>


        {{-- Position --}}

        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="category" class="importance" name="position_importance" id="category">
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="category">Vəzifə kateqoriyası </label>
            <select data-s="category" disabled name="position" id="category">
                <option>Seç</option>
                @foreach ($positions as $position)
                    <option value="{{ $position->name }}">{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="start-work"> Minimum iş stajı</label>
            <input data-s="category" disabled type="number" placeholder="Müddət" name="position_employment_duration">
        </div>

        <div class="col-lg-6">
            <input data-field="education" type="button" name="previous"  class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="language" type="button" name="next" class="next action-button" value="Sonrakı" />
        </div>
</fieldset>