@php
$className = [$class, 'sr-only peer'];
$toggleClass = [$toggleClass, '', 'checkbox_toggle'];

if ($checked) {
    array_push($className, 'peer-checked');
}

if ($color != 'primary') {
    if ($color == 'danger') {
        array_push($toggleClass, 'peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-rose-300 dark:peer-focus:ring-rose-800 peer peer-checked:after:translate-x-full peer-checked:after:border-white peer-checked:bg-rose-400');
    } elseif ($color == 'warning') {
        array_push($toggleClass, 'peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-amber-300 dark:peer-focus:ring-amber-800 peer peer-checked:after:translate-x-full peer-checked:after:border-white peer-checked:bg-amber-400');
    } elseif ($color == 'info') {
        array_push($toggleClass, 'peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 dark:peer-focus:ring-indigo-800 peer peer-checked:after:translate-x-full peer-checked:after:border-white peer-checked:bg-indigo-400');
    } elseif ($color == 'success') {
        array_push($toggleClass, 'peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer peer-checked:after:translate-x-full peer-checked:after:border-white peer-checked:bg-teal-400');
    } elseif ($color == 'dark') {
        array_push($toggleClass, 'peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-gray-300 dark:peer-focus:ring-gray-800 peer peer-checked:after:translate-x-full peer-checked:after:border-white peer-checked:bg-gray-900 dark:peer-checked:bg-gray-200');
    } elseif ($color == 'light') {
        array_push($toggleClass, 'peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-gray-300 dark:peer-focus:ring-gray-800 peer peer-checked:after:translate-x-full peer-checked:after:border-white peer-checked:bg-gray-400 dark:peer-checked:bg-gray-400');
    }
} else {
    array_push($toggleClass, 'peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-sky-300 dark:peer-focus:ring-sky-800 peer peer-checked:after:translate-x-full peer-checked:after:border-white peer-checked:bg-sky-400');
}

if ($disabled) {
    array_push($className, 'cursor-not-allowed');
    array_push($toggleClass, 'cursor-not-allowed');
}
@endphp

<label for="{{ $name }}" class="inline-flex relative items-center {{ $disabled ? 'cursor-not-allowed' : 'cursor-pointer' }}">
    <input type="checkbox" value="{{ $value }}" name="{{ $name }}" id="{{ $id }}" class="{{ join(' ', $className) }}" @if ($required) required @endif @if ($disabled) disabled @endif @if ($checked) checked @endif @if ($onclick) onclick="{{ $onclick }}" @endif @if ($onchange) onchange="{{ $onchange }}" @endif @if ($onblur) onblur="{{ $onblur }}" @endif>
    <div class="{{ join(' ', $toggleClass) }}"></div>
    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ Str::headline($label != '' ? $label : $name) }}</span>
</label>
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
