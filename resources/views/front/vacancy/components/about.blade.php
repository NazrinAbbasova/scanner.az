 <!-- About vacancy -->
<fieldset data-field="about-vacancy">
    <h5>Vakansiya haqqında</h5>
    @include('front.vacancy.components.video')
    <div class="about-vacancy">
        <div class="row">
            <div class="col-lg-12">
                <label for="vacancy-name">Vakansiyanın adı*</label>
                <input type="text" name="title" value="{{ isset($vacancy) ? $vacancy->title : old('title') }}" required placeholder="Vakansiyanın adını daxil edin">
            </div>
            <div class="col-lg-12">
                <label for="vacancy-about">Qısa təsvir*</label>
                <textarea name="description" required placeholder="Qısa təsviri daxil edin">{{ isset($vacancy) ? $vacancy->description : old('description') }}</textarea>
            </div>
            <div class="col-lg-12">
                <label for="vacancy-commitment">Əsas öhdəliklər</label>
                <textarea name="obligations" placeholder="Əsas öhdəlikləri daxil edin">{{ isset($vacancy) ? $vacancy->obligations : old('obligations') }}</textarea>
            </div>
            <div class="col-lg-12">
                <label for="vacancy-warranty">Təminatlar</label>
                <textarea name="guarantees" placeholder="Təminatları daxil edin">{{ isset($vacancy) ? $vacancy->guarantees : old('guarantees') }}</textarea>
            </div>
        </div>
    </div>

    <input data-field="personal" type="button" name="next" class="next action-button" value="Sonrakı" />
</fieldset>