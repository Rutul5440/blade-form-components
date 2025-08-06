<div class="mb-3">
    <label class="form-label d-block">{{ $label }}</label>

    <div class="form-check form-check-inline">
        <input type="radio" name="{{ $name }}" value="Male" class="form-check-input" id="male">
        <label class="form-check-label" for="male">Male</label>
    </div>

    <div class="form-check form-check-inline">
        <input type="radio" name="{{ $name }}" value="Female" class="form-check-input" id="female">
        <label class="form-check-label" for="female">Female</label>
    </div>

    <div class="form-check form-check-inline">
        <input type="radio" name="{{ $name }}" value="Other" class="form-check-input" id="other">
        <label class="form-check-label" for="other">Other</label>
    </div>
</div>
