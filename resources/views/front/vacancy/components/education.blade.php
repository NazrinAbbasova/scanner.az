<!-- Education informations -->
<fieldset data-field="education">
    <h5>Təhsil məlumatları</h5>
    @include('front.vacancy.components.video')
    <div class="row">
        <div class="col-lg-4">
            <label for=""></label>
            <select data-select="degree" class="importance" name="education_importance" id="degree">
                @isset($vacancy)
                <option value="{{ $vacancy->education_importance }}">
                    @if ($vacancy->education_importance == 0) Önəm daşımır
                    @elseif ($vacancy->education_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->education_importance == 3)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="degree">Təhsil dərəcəsi</label>
            <select data-s="degree" {{ isset($vacancy) ? '' : 'disabled' }} name="education" id="degree">
                @if(isset($vacancy) && $vacancy->education)
                    <option value="{{ $vacancy->education }}">{{ $vacancy->education }}</option>
                @else
                    <option value="choose">Seç</option>
                @endif
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
                @isset($vacancy)
                <option value="{{ $vacancy->exam_score_importance }}">
                    @if ($vacancy->exam_score_importance == 0) Önəm daşımır
                    @elseif ($vacancy->exam_score_importance == 1) Az önəm daşıyır
                    @elseif ($vacancy->exam_score_importance == 3)Önəmlidir
                    @else Mütləqdir
                    @endif    
                </option>
                @endisset
                @include('front.vacancy.components.importance')
            </select>
        </div>
        <div class="col-lg-4">
            <label for="score">Qəbul balı</label>
            <select data-s="score" {{ isset($vacancy) ? '' : 'disabled' }} name="score" id="score">
                @if(isset($vacancy) && $vacancy->exam_score)
                    <option value="{{ $vacancy->exam_score }}">{{ $vacancy->exam_score }}+</option>
                @else
                    <option value="choose">Seç</option>
                @endif
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