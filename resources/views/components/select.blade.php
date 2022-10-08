@php
$className = [$class];
$labelClass = [$class];

if ($errors->has($name)) {
    $className = array_push($className, 'select__failed');
    $labelClass = array_push($labelClass, 'label__failed');
} else {
    $className = array_push($className, 'select__default');
    $labelClass = array_push($labelClass, 'label__default');
}

if ($disabled) {
    array_push($className, 'disabled');
    array_push($labelClass, 'disabled');
}

@endphp

<div class="form__group">
    <label for="{{ $name }}" class="{{ join(' ', $labeClass) }}">
        {{ Str::headline($label != '' ? $label : $name) }}
    </label>
    <select name="{{ $name }}" id="{{ $id }}" class="{{ join(' ', $className) }}" @if ($required) required @endif @if ($autofocus) autofocus @endif @if ($disabled) disabled @endif @if ($onclick) onclick="{{ $onclick }}" @endif @if ($onchange) onchange="{{ $onchange }}" @endif @if ($onkeyup) onkeyup="{{ $onkeyup }}" @endif @if ($readonly) readonly @endif @if ($onblur) onblur="{{ $onblur }}" @endif>
        {{ $slot }}
    </select>

    @error($name)
        <p id="error-{{ $name }}" class="mt-2 text-xs text-rose-600 dark:text-rose-400">
            @error($name)
                {{ $message }}
            @enderror
        </p>
    @enderror

    @if ($helpers)
        <p id="error-{{ $name }}" class="mt-2 text-xs text-sky-600 dark:text-sky-400">
            {{ Str::headline($helpers) }}
        </p>
    @endif

</div>
