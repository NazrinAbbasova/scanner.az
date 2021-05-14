<div class="col-md-{{ $n ?? '6' }}">
    <div class="form-group">
        <label>Vaciblik<span class="required">*</span></label>
        <select name="{{ $name }}" class="form-control">
            <option value="0">Önəm daşımır</option>
            <option value="1">Az önəmlidir</option>
            <option value="2">Önəmlidir</option>
            <option value="3">Mütləqdir</option>
        </select>
    </div>
</div>