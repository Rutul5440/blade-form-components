<div class="mb-3 col-sm-4">
    <label for="{{ $label }}" class="form-label">
        {{ $label }} @if ($isMandatory)
            <span class="text-danger">*</span>
        @endif
    </label>
    <input type="{{ $type }}" class="form-control"{{ $attributes->merge(['class' => $class]) }}
        id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) }}">
    <span class="text-danger err-class" id="{{ 'err-' . $id }}"></span>
</div>
