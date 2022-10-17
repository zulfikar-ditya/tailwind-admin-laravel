@php
// $className = $disabled ? 'form__checkbox disabled' : 'form__checkbox';
// $labelClass = $disabled ? 'checkbox__label disabled' : 'checkbox__label';

$className = [$class];
$labelClass = ['checkbox__label'];
if ($disabled) {
    array_push($className, 'disabled');
    array_push($labelClass, 'disabled');
}

if ($color != 'primary') {
    array_push($className, 'checkbox__' . $color);
} else {
    array_push($className, 'form__checkbox');
}

@endphp
<div class="form__group form__group__checkbox">
    <input id="{{ $id }}" name="{{ $name }}" type="checkbox" value="{{ old($name) ?? $value }}" class="{{ join(' ', $className) }}" @if ($required) required @endif @if ($disabled) disabled @endif @if ($checked) checked @endif @if ($onclick) onclick="{{ $onclick }}" @endif @if ($onchange) onchange="{{ $onchange }}" @endif @if ($onblur) onblur="{{ $onblur }}" @endif>
    <label for="{{ $name }}" class="{{ join(' ', $labelClass) }}">{{ Str::headline($label != '' ? $label : $name) }}</label>
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
