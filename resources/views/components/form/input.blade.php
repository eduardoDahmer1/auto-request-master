@props(['type' => 'text', 'name', 'value' => '', 'required' => ''])

<div {{ $attributes->merge(['class' => 'mb-1']) }}>
    <label for="{{ $name }}" class="form-label fs-4">{{ $slot }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}"
        placeholder="{{ $slot }}" value="{{ $value }}" {{ $required }}>
</div>
