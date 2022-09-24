@php

$className = [$class, $block ? 'w-full' : ''];

if ($size == 'lg') {
    array_push($className, 'py-3 px-5');
}

if ($size == 'md') {
    array_push($className, 'py-2.5 px-5');
}

if ($size == 'sm') {
    array_push($className, 'py-1.5 px-5');
}

if ($style == 'default') {
    array_push($className, 'text-white font-medium rounded-lg text-sm scale-100 hover:scale-105 focus:outline-none transition-all duration-200 ease-in-out');
    if ($color == 'primary') {
        array_push($className, 'bg-sky-500 hover:bg-sky-600 focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-700');
    }
    if ($color == 'danger') {
        array_push($className, 'bg-rose-500 hover:bg-rose-600 focus:ring-rose-300 dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-700');
    }
    if ($color == 'warning') {
        array_push($className, 'bg-amber-500 hover:bg-amber-600 focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-700');
    }
    if ($color == 'success') {
        array_push($className, 'bg-teal-500 hover:bg-teal-600 focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-700');
    }
    if ($color == 'info') {
        array_push($className, 'bg-indigo-500 hover:bg-indigo-600 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-700');
    }
}

if ($style == 'outline') {
    array_push($className, 'focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:hover:text-white');

    if ($color == 'primary') {
        array_push($className, 'text-sky-500 hover:text-white border border-sky-500 hover:bg-sky-500 focus:ring-sky-300 dark:border-sky-600 dark:text-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-700');
    }
    if ($color == 'danger') {
        array_push($className, 'text-rose-500 hover:text-white border border-rose-500 hover:bg-rose-500 focus:ring-rose-300 dark:border-rose-600 dark:text-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-700');
    }
    if ($color == 'warning') {
        array_push($className, 'text-amber-500 hover:text-white border border-amber-500 hover:bg-amber-500 focus:ring-amber-300 dark:border-amber-600 dark:text-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-700');
    }
    if ($color == 'success') {
        array_push($className, 'text-teal-500 hover:text-white border border-teal-500 hover:bg-teal-500 focus:ring-teal-300 dark:border-teal-600 dark:text-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-700');
    }
    if ($color == 'info') {
        array_push($className, 'text-info-500 hover:text-white border border-info-500 hover:bg-info-500 focus:ring-info-300 dark:border-info-600 dark:text-info-600 dark:hover:bg-info-700 dark:focus:ring-info-700');
    }
}

if ($style == 'gradient') {
    array_push($className, '');
}

if ($disabled) {
    array_push($className, 'cursor-not-allowed');
}

// tag
if ($link && $link != '') {
    $tag = 'a';
} elseif ($badge) {
    $tag = 'span';
} else {
    $tag = 'button';
}

if ($rounded) {
    array_push($className, 'rounded-full');
}

if ($textColor && $textColor != '') {
    array_push($className, "text-$textColor");
}

@endphp
<{{ $tag }} @if ($link && $link != '') href="{{ $link }}"
    @else
        type="{{ $type }}" @endif class="{{ join(' ', $className) }}" @if ($id) id="{{ $id }}" @endif @if ($disabled) disabled @endif @if ($dataToggle) data-bs-toggle="{{ $dataToggle }}" @endif @if ($dataTarget) data-bs-target="{{ $dataTarget }}" @endif @if ($dataDismiss) data-bs-dismiss="{{ $dataDismiss }}" @endif @isset($onclick) onclick="{{ $onclick }}" @endisset @isset($onchange) oncange="{{ $onchange }}" @endisset>

    @if ($icon && $icon != '' && $iconRight == '')
        @if ($fontawesome)
            <i class="{{ $styleIcon }} fa-{{ $icon }} {{ $label ? 'mr-2' : '' }}"></i>
        @else
            <i data-feather="{{ $icon }}" class="w-4 h-4 mr-2"></i>
        @endif
    @endif

    {{ Str::headline($label) }}

    @if ($icon && $icon != '' && $iconRight != '')
        @if ($fontawesome)
            <i class="{{ $styleIcon }} fa-{{ $icon }} {{ $label ? 'ml-2' : '' }}"></i>
        @else
            <i data-feather="{{ $icon }}" class="w-4 h-4 mr-2"></i>
        @endif
    @endif

    </{{ $tag }}>
