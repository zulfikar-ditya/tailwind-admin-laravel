@php
$className = $disabled ? 'form__checkbox disabled' : 'form__checkbox';
$labelClass = $disabled ? 'checkbox__label disabled' : 'checkbox__label';
@endphp
<div class="form__group form__group__checkbox">
    <input id="{{ $id }}" name="{{ $name }}" type="checkbox" value="{{ old($name) ?? $value }}" class="{{ $className }}" @if ($required) required @endif @if ($disabled) disabled @endif @if ($checked) checked @endif @if ($onclick) onclick="{{ $onclick }}" @endif @if ($onchange) onchange="{{ $onchange }}" @endif @if ($onblur) onblur="{{ $onblur }}" @endif>
    <label for="{{ $name }}" class="{{ $labelClass }}">{{ Str::headline($label != '' ? $label : $name) }}</label>
</div>
