@props([
    'label' => '',
    'name',
    'class' => 'form-select',
])

<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" {{ $attributes->merge(['class' => $class]) }}>
        <option value="">-- Select --</option>
        <option value="India">Test 1</option>
        <option value="USA">Test 2</option>
        <option value="UK">Test 3</option>
    </select>
</div>
