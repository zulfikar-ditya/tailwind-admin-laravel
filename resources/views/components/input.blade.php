@php
if ($errors->has($name)) {
    $className = [$class, 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-rose-600 appearance-none dark:text-white dark:border-rose-500 dark:focus:border-rose-500 focus:outline-none focus:ring-0 focus:border-rose-500 peer'];
    $labelClass = 'absolute text-sm text-rose-500 dark:text-rose-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6';
} else {
    $className = [$class, 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-sky-500 focus:outline-none focus:ring-0 focus:border-sky-500 peer'];
    $labelClass = 'absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-sky-500 peer-focus:dark:text-sky-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6';
}

if ($disabled) {
    array_push($className, 'cursor-not-allowed');
}

array_push($className, $class);

@endphp

<div class="form__group relative z-0">
    <input type="{{ $type }}" id="{{ $id != '' ? $id : $name }}" name="{{ $name }}" class="{{ join(' ', $className) }}" placeholder=" " value="{{ old($name) ?? $value }}" @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif @if ($required) required @endif @if ($autofocus) autofocus @endif @if ($disabled) disabled @endif @if ($onclick) onclick="{{ $onclick }}" @endif @if ($onchange) onchange="{{ $onchange }}" @endif @if ($onkeyup) onkeyup="{{ $onkeyup }}" @endif @if ($readonly) readonly @endif @if ($onblur) onblur="{{ $onblur }}" @endif />
    <label for="{{ $name }}" class="{{ $labelClass }}">{{ Str::headline($label != '' ? $label : $name) }}</label>
</div>

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
