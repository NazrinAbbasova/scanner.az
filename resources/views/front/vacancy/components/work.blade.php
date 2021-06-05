<!-- Work informations -->
<fieldset data-field="work">
    <h5>İş təcrübəsi</h5>
    @include('front.vacancy.components.video')
    <div class="row">

        {{-- Field --}}
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="field" class="importance" name="field_importance" id="field">
                @isset($vacancy)
                <option value="{{ $vacancy->field_importance }}">
                    @if ($vacancy->field_importance == 0) Önəm daşımır
                    @elseif ($vacancy->field_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->field_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="field">Sektor</label>
            <select data-s="field" {{ isset($vacancy) &&  $vacancy->field ? '' : 'disabled' }} name="field" id="field">
                @if(isset($vacancy) && $vacancy->field)
                    <option value="{{ $vacancy->field }}">{{ $vacancy->field }}</option>
                @else
                    <option value="choose">Seç</option>
                @endif
                @foreach ($fields as $field)
                    <option value="{{ $field->name }}">{{ $field->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="start-work">Minimum iş stajı</label>
            <input data-s="field" {{ isset($vacancy) &&  $vacancy->field_employment_duration ? '' : 'disabled' }} type="number" value="{{ isset($vacancy) ? $vacancy->field_employment_duration : old('field_employment_duration') }}" name="field_employment_duration" placeholder="Müddət">
        </div>
        <hr>

        {{-- Function --}}

        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="function" class="importance" name="function_importance" id="function">
                @isset($vacancy)
                <option value="{{ $vacancy->function_importance }}">
                    @if ($vacancy->function_importance == 0) Önəm daşımır
                    @elseif ($vacancy->function_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->function_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="function">Funksiya</label>
            <select data-s="function" {{ isset($vacancy) &&  $vacancy->function ? '' : 'disabled' }} name="function" id="function">
                @if(isset($vacancy) && $vacancy->function)
                    <option value="{{ $vacancy->function }}">{{ $vacancy->function }}</option>
                @else
                    <option value="choose">Seç</option>
                @endif
                @foreach ($funcs as $function)
                    <option value="{{ $function->name }}">{{ $function->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="start-work">Minimum iş stajı</label>
            <input data-s="function" {{ isset($vacancy) &&  $vacancy->function_employment_duration ? '' : 'disabled' }} type="number" value="{{ isset($vacancy) ? $vacancy->function_employment_duration : old('function_employment_duration') }}" placeholder="Müddət" name="function_employment_duration">
        </div>
        <hr>


        {{-- Position --}}

        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="category" class="importance" name="position_importance" id="category">
                @isset($vacancy)
                <option value="{{ $vacancy->position_importance }}">
                    @if ($vacancy->position_importance == 0) Önəm daşımır
                    @elseif ($vacancy->position_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->position_importance == 2)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="category">Vəzifə kateqoriyası </label>
            <select data-s="category" {{ isset($vacancy) &&  $vacancy->position ? '' : 'disabled' }} name="position" id="category">
                @if(isset($vacancy) && $vacancy->position)
                    <option value="{{ $vacancy->position }}">{{ $vacancy->position }}</option>
                @else
                    <option value="choose">Seç</option>
                @endif
                @foreach ($positions as $position)
                    <option value="{{ $position->name }}">{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label for="start-work"> Minimum iş stajı</label>
            <input data-s="category" {{ isset($vacancy) &&  $vacancy->position_employment_duration ? '' : 'disabled' }} type="number" placeholder="Müddət" value="{{ isset($vacancy) ? $vacancy->position_employment_duration : old('position_employment_duration') }}" name="position_employment_duration">
        </div>

        <div class="col-lg-6">
            <input data-field="education" type="button" name="previous"  class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="language" type="button" name="next" class="next action-button" value="Sonrakı" />
        </div>
</fieldset>