<!-- Education informations -->
<fieldset data-field="education">
    <h5>Təhsil məlumatları</h5>
    <div class="dynamic-fields-education" data-f-parent='education'>
        <div class="dynamic-education" data-f="education">
            <div class="row">
                <div class="col-lg-4">
                    <label for="degree">Təhsil dərəcəsi</label>
                    <select data-s="degree" name="degree" id="degree">
                        <option>Seç</option>
                        <option value="">İbtidai</option>
                        <option value="">Orta</option>
                        <option value="">Peşə</option>
                        <option value="bachelor">Bakalavr</option>
                        <option value="master">Magistr</option>
                        <option value="phd">Doktorantura</option>
                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="score">Qəbul balı</label>
                    <input type="number" id="score" placeholder="Qəbul balınız">
                </div>
                <div class="col-lg-4">
                    <label for="university">Təhsil müəssisəsi</label>
                    <select data-s="university" name="university" id="university">
                        <option>Seç</option>
                        @foreach ($unis as $uni)
                            <option value="{{ $uni->name }}">{{ $uni->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="section">İxtisas istiqaməti</label>
                    <select data-s="section" name="section" id="section">
                        <option>Seç</option>
                        <option value="">İncəsənət</option>
                        <option value="">İqtisadiyyat</option>
                        <option value="">Komputer elmləri</option>
                        <option value="bachelor">Jurnalistika</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="field">İxtisas</label>
                    <input type="text" placeholder="İxtisasınız">
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label>Daxil olduğunuz il</label>
                    <input type="number" placeholder="İl">
                </div>
                <div class="col-lg-4">
                    <label>Bitirdiyiniz il</label>
                    <input type="number" placeholder="İl">
                </div>
            </div>
        </div>
    </div>
    <div class="add-remove">
        <div class="add-education add-input" data-type='education'>
            + Əlavə et
        </div>
        <!-- <div class="remove-education">
            Sil
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <input data-field="personal" type="button" name="previous"
                class="previous action-button" value="Əvvəlki" />
        </div>
        <div class="col-lg-6">
            <input data-field="work" type="button" name="next" class="next action-button"
                value="Sonrakı" />
        </div>
    </div>
</fieldset>