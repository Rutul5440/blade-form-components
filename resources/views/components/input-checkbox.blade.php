<div class="mb-3">
    <label class="form-label d-block">{{ $label }}</label>

    <div class="form-check form-check-inline">
        <input type="checkbox" name="{{ $name }}[]" value="HTML" class="form-check-input" id="html">
        <label class="form-check-label" for="html">HTML</label>
    </div>

    <div class="form-check form-check-inline">
        <input type="checkbox" name="{{ $name }}[]" value="CSS" class="form-check-input" id="css">
        <label class="form-check-label" for="css">CSS</label>
    </div>

    <div class="form-check form-check-inline">
        <input type="checkbox" name="{{ $name }}[]" value="JS" class="form-check-input" id="js">
        <label class="form-check-label" for="js">JS</label>
    </div>
</div>
