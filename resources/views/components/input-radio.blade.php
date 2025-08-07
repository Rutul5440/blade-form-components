<div class="mb-3">
    <label class="form-label d-block" {{ $attributes->merge(['class' => $class]) }}>{{ $label }}</label>
    @foreach ($radioButtons as $radioButton)
        <div class="form-check form-check-inline">
            <input type="radio"
            name="{{ $radioButton->name }}"
            value="{{ $radioButton->value }}"
            class="form-check-input"
            id="{{ $radioButton->id }}">
            <label class="form-check-label" for="{{ $radioButton->id }}">{{ $radioButton->label }}</label>
        </div>
    @endforeach
</div>
