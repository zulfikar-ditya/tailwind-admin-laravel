<label for="{{ $name }}" class="inline-flex relative items-center cursor-pointer">
    <input type="checkbox" value="{{ $value }}" name="{{ $name }}" id="{{ $id }}" class="sr-only peer" @if ($required) required @endif @if ($disabled) disabled @endif @if ($checked) checked @endif @if ($onclick) onclick="{{ $onclick }}" @endif @if ($onchange) onchange="{{ $onchange }}" @endif @if ($onblur) onblur="{{ $onblur }}" @endif>
    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
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
