<!-- Personal informations -->
<fieldset data-field="personal">
    <h5>Şəxsi məlumatlar</h5>
    @include('front.vacancy.components.video')
    <div class="row">

        <div class="col-lg-4">
            <label></label>
            <select data-select="age" class="importance" name="birthdate" id="birthdate">
                <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label> Minimum yaş</label>
            <input data-s="age" name="min_age" disabled type="number">
        </div>
        <div class="col-lg-4">
            <label>Maksimum yaş</label>
            <input data-s="age" disabled name="max_age" type="number">
        </div>


        <hr>


        <div class="col-lg-4">
            <label></label>
            <select data-select="citizenship" class="importance" name="citizenship" id="citizenship">
                <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label >Vətəndaşlıq</label>
            <select data-s="citizenship" disabled name="gender" id="gender">
                <option value="choose">Seç</option>
                <option value="male">Azərbaycanlı</option>
                <option value="female">Əcnəbi</option>
            </select>
        </div>

        
        <hr>


        <div class="col-lg-4">
            <label></label>
            <select data-select="gender" class="importance" name="gender" id="gender">
                <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="gender">Cins</label>
            <select data-s="gender" disabled name="gender" id="gender">
                <option value="choose">Seç</option>
                <option value="male">Kişi</option>
                <option value="female">Qadın</option>
            </select>
        </div>


        <hr>


        <div class="col-lg-4">
            <label></label>
            <select data-select="marital" class="importance" name="marital" id="marital">
                <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="marital">Ailə vəziyyəti</label>
            <select data-s="marital" disabled name="marital" id="marital">
                <option value="choose">Seç</option>
                <option value="male">Evli</option>
                <option value="female">Subay</option>
            </select>
        </div>


        <hr>


        <div class="col-lg-4">
            <select data-select="military" class="importance" name="military" id="military">
                <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label for="military">Hərbi mükəlləfiyyət</label>
            <select data-s="military" disabled name="military" id="military">
                <option value="choose">Seç</option>
                <option value="not-important">Var</option>
                <option value="less-important">Yoxdur</option>
            </select>
        </div>


        <hr>


        <div class="col-lg-4">
            <label></label>
            <select data-select="driving-lisence" class="importance" name="driving-lisence"
                id="driving-lisence">
                <option value="choose">Önəmlilik dərəcəsini təyin et</option>
                <option value="not-important">Önəm daşımır</option>
                <option value="less-important">Az önəm daşıyır</option>
                <option value="important">Önəmlidir</option>
                <option value="more-important">Mütləqdir</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label>Sürücülük vəsiqəsi</label>
            <select data-s="driving-lisence" disabled name="driving-lisence"
                id="driving-lisence">
                <option value="choose">Seç</option>
                <option value="Var">Var</option>
                <option value="Yoxdur">Yoxdur</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label>Sürücülük vəsiqəsinin kateqoriyası</labelfor=>
                <select data-s="driving-lisence" disabled name="lisence-category" id="lisence-category">
                    <option value="choose">Seç</option>
                    <option value="A1">A1</option>
                    <option value="A">A</option>
                    <option value="B1">B1</option>
                    <option value="B">B</option>
                    <option value="C1">C1</option>
                    <option value="C">C</option>
                    <option value="D1">D1</option>
                    <option value="D">D</option>
                    <option value="BE">BE</option>
                    <option value="C1E">C1E</option>
                    <option value="CE">CE</option>
                    <option value="D1E">D1E</option>
                    <option value="DE">DE</option>
                </select>
        </div>
    </div>

    <input data-field="contact" type="button" name="next" class="next action-button" value="Next" />
</fieldset>