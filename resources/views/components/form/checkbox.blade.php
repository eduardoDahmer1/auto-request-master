@props(['name', 'value' => true, 'required' => ''])

<div {{ $attributes->merge(['class' => 'mb-1']) }}>
    <input type="checkbox" class="form-check-input m-0 fs-3" name="{{ $name }}" id="{{ $name }}"
        placeholder="{{ $slot }}" {{ $value ? 'checked' : '' }} value="1" {{ $required }}>
    <label for="{{ $name }}" class="form-check-label mx-1 fs-3">{{ $slot }}</label>
</div>
