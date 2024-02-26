@props(['name', 'options', 'value' => '', 'required' => ''])


<select {{ $attributes->merge(['class' => 'form-select fs-4']) }} style="width: fit-content;"
    aria-label="{{ $slot }}" name="{{ $name }}" {{ $required }}>
    <option {{ $value === '' ? 'selected' : '' }} disabled class="fs-4" value="">{{ $slot }}</option>
    @foreach ($options as $option)
        <option value="{{ $option }}" class="fs-4" {{ $value === $option ? 'selected' : '' }}>
            {{ ucfirst(__($option)) }}</option>
    @endforeach
</select>
