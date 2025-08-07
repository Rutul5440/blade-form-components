<div>
    <label for="{{ $label_for }}"> {{ $label }} @if ($isMandatory)
            <span class="text-danger">*</span>
        @endif
    </label>
    <select class="form-control select2" {{ $attributes->merge(['class' => $class]) }} name="{{ $select_name }}"
        id="{{ $select_id }}">
        <option></option>
        @foreach ($options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
    </select>
    <span class="text-danger err-class" id="{{ 'err-' . $select_id }}"></span>
</div>
