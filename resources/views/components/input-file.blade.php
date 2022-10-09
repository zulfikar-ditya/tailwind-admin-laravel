@php
if ($errors->has($name)) {
    $className = [$class, 'block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-rose-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-rose-600 dark:placeholder-gray-400'];
    $labelClass = 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300';
} else {
    $className = [$class, 'block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400'];
    $labelClass = 'block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300';
}

if ($disabled) {
    array_push($className, 'cursor-not-allowed');
}
@endphp

<div class="mb-8">
    <label for="{{ $name }}" class="{{ $labelClass }}">{{ Str::headline($label != '' ? $label : $name) }}</label>
    <input type="file" id="{{ $id != '' ? $id : $name }}" name="{{ $name }}" class="{{ join(' ', $className) }}" placeholder=" " value="{{ old($name) ?? $value }}" @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif @if ($required) required @endif @if ($multiple) multiple @endif @if ($autofocus) autofocus @endif @if ($disabled) disabled @endif @if ($onclick) onclick="{{ $onclick }}" @endif @if ($onchange) onchange="{{ $onchange }}" @endif @if ($onkeyup) onkeyup="{{ $onkeyup }}" @endif @if ($readonly) readonly @endif @if ($onblur) onblur="{{ $onblur }}" @endif />
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
