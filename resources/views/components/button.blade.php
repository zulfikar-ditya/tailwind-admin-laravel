@php

$className = [$class, $block ? 'w-full' : ''];

array_push($className, 'btn');
if ($size == 'lg') {
    array_push($className, 'py-3.5 px-7');
}

if ($size == 'md') {
    array_push($className, 'py-2.5 px-5');
}

if ($size == 'sm') {
    array_push($className, 'py-1.5 px-5');
}

if ($style == 'default') {
    array_push($className, "btn__$color");
}

if ($style == 'outline') {
    array_push($className, "btn__outline__$color");
}

if ($style == 'gradient') {
    array_push($className, "btn__gradient__$color");
}

if ($disabled) {
    array_push($className, 'cursor-not-allowed');
}

// tag
if ($link && $link != '') {
    $tag = 'a';
} elseif ($badge) {
    $tag = 'span';
    array_push($className, 'cursor-default');
} else {
    $tag = 'button';
}

if ($rounded) {
    array_push($className, 'btn__rouded');
}

if ($icon && $icon != '') {
    if (!$fontawesome) {
        array_push($className, 'inline-flex items-center');
    }
}

@endphp
<{{ $tag }} @if ($link && $link != '') href="{{ $link }}"
    @else
        type="{{ $type }}" @endif class="{{ join(' ', $className) }}" @if ($id) id="{{ $id }}" @endif @if ($disabled) disabled @endif @isset($onclick) onclick="{{ $onclick }}" @endisset>

    @if ($icon && $icon != '' && $iconRight == '')
        @if ($fontawesome)
            <i class="{{ $styleIcon }} fa-{{ $icon }} {{ $label ? 'mr-2' : '' }}"></i>
        @else
            <i data-feather="{{ $icon }}" class="w-4 h-4"></i>
        @endif
    @endif

    {{ Str::headline($label) }}

    @if ($icon && $icon != '' && $iconRight != '')
        @if ($fontawesome)
            <i class="{{ $styleIcon }} fa-{{ $icon }} {{ $label ? 'ml-2' : '' }}"></i>
        @else
            <i data-feather="{{ $icon }}" class="w-4 h-4 ml-2"></i>
        @endif
    @endif

    </{{ $tag }}>
