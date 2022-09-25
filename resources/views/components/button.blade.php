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
    array_push($className, 'font-medium rounded-lg text-sm mb-2 scale-100 hover:scale-105 focus:outline-none transition-all duration-200 ease-in-out');
    if ($color == 'primary') {
        array_push($className, 'text-white bg-sky-500 hover:bg-sky-600 focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-700');
    }
    if ($color == 'danger') {
        array_push($className, 'text-white bg-rose-500 hover:bg-rose-600 focus:ring-rose-300 dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-700');
    }
    if ($color == 'warning') {
        array_push($className, 'text-white bg-amber-500 hover:bg-amber-600 focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-700');
    }
    if ($color == 'success') {
        array_push($className, 'text-white bg-teal-500 hover:bg-teal-600 focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-700');
    }
    if ($color == 'info') {
        array_push($className, 'text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-700');
    }
    if ($color == 'light') {
        array_push($className, 'text-gray-900 bg-white border border-gray-300 dark:border-gray-200 hover:bg-slate-100 focus:ring-gray-300 dark:bg-gray-800 dark:hover:bg-gray-900 dark:focus:ring-gray-700 dark:text-white');
    }
    if ($color == 'secondary') {
        array_push($className, 'text-white bg-gray-500 hover:bg-gray-600 focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700');
    }
    if ($color == 'dark') {
        array_push($className, 'text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-700 dark:bg-gray-300 dark:hover:bg-gray-200 dark:focus:ring-gray-300 dark:text-gray-800');
    }
}

if ($style == 'outline') {
    array_push($className, 'focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:hover:text-white scale-100 hover:scale-105 focus:outline-none transition-all duration-200 ease-in-out');

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
        array_push($className, 'text-indigo-500 hover:text-white border border-indigo-500 hover:bg-indigo-500 focus:ring-indigo-300 dark:border-indigo-600 dark:text-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-700');
    }
    if ($color == 'light') {
        array_push($className, 'text-gray-800 hover:text-gray-900 border border-gray-500 bg-slate-100 dark:bg-transparent dark:border-white hover:bg-white focus:ring-gray-300 dark:border-gray-600 dark:text-gray-200 dark:hover:bg-gray-900 dark:focus:ring-gray-700');
    }
    if ($color == 'secondary') {
        array_push($className, 'text-gray-800 hover:text-white border border-gray-500 hover:bg-gray-500 focus:ring-gray-300 dark:border-gray-200 dark:text-slate-200 dark:hover:text-gray-100 dark:hover:bg-gray-800 dark:focus:ring-gray-700');
    }
    if ($color == 'dark') {
        array_push($className, 'text-gray-800 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-200 dark:hover:bg-gray-200 dark:focus:ring-gray-700 dark:hover:text-gray-900');
    }
}

if ($style == 'gradient') {
    array_push($className, 'text-white bg-gradient-to-r hover:bg-gradient-to-br focus:ring-4 focus:outline-none shadow-lg dark:shadow-lg font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 scale-100 hover:scale-105 focus:outline-none transition-all duration-200 ease-in-out');

    if ($color == 'primary') {
        array_push($className, 'from-sky-500 via-sky-600 to-sky-700 focus:ring-sky-300 dark:focus:ring-sky-800 shadow-sky-500/50 dark:shadow-sky-800/80');
    }
    if ($color == 'danger') {
        array_push($className, 'from-rose-500 via-rose-600 to-rose-700 focus:ring-rose-300 dark:focus:ring-rose-800 shadow-rose-500/50 dark:shadow-rose-800/80');
    }
    if ($color == 'warning') {
        array_push($className, 'from-amber-500 via-amber-600 to-amber-700 focus:ring-amber-300 dark:focus:ring-amber-800 shadow-amber-500/50 dark:shadow-amber-800/80');
    }
    if ($color == 'success') {
        array_push($className, 'from-teal-500 via-teal-600 to-teal-700 focus:ring-teal-300 dark:focus:ring-teal-800 shadow-teal-500/50 dark:shadow-teal-800/80');
    }
    if ($color == 'info') {
        array_push($className, 'from-indigo-500 via-indigo-600 to-indigo-700 focus:ring-indigo-300 dark:focus:ring-indigo-800 shadow-indigo-500/50 dark:shadow-indigo-800/80');
    }
    if ($color == 'light') {
        array_push($className, 'from-slate-200 via-slate-300 to-white border border-gray-300 text-gray-800 dark:text-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-700 focus:ring-slate-300 dark:focus:ring-slate-800 shadow-slate-500/50 dark:shadow-slate-800/80');
    }
    if ($color == 'secondary') {
        array_push($className, 'from-gray-500 via-gray-600 to-gray-700 focus:ring-gray-300 dark:focus:ring-gray-800 shadow-gray-500/50 dark:shadow-gray-800/80');
    }
    if ($color == 'dark') {
        array_push($className, 'from-gray-900 via-gray-800 to-gray-700 dark:from-slate-300 dark:via-slate-400 dark:to-white dark:text-gray-800 focus:ring-gray-300 dark:focus:ring-gray-800 shadow-gray-500/50 dark:shadow-gray-800/80');
    }
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
    array_push($className, 'rounded-full');
}

if ($textColor && $textColor != '') {
    array_push($className, "text-$textColor");
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
            <i data-feather="{{ $icon }}" class="w-4 h-4 mr-2"></i>
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
