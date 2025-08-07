<div class="mb-3">
    @foreach ($checkboxes as $checkbox)
        <div class="form-check form-check-inline">
            <input type="checkbox" name="{{ $checkbox->name }}" value="{{ $checkbox->value }}" class="form-check-input"
                id="{{ $checkbox->id }}">
            <label class="form-check-label" for="{{ $checkbox->id }}">{{ $checkbox->label }}</label>
        </div>
    @endforeach
</div>
