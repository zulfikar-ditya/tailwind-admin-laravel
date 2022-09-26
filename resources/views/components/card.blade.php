@php
$className = [$class, 'card'];
$classHead = [$headClass, 'card__head'];
$classBody = [$bodyClass, 'card__body'];
$classFooter = [$footerClass, 'card__footer'];
@endphp
<div class="{{ join(' ', $className) }}" id="{{ $id }}">

    {{-- img --}}
    @if ($img != '')
        {{ $img }}
    @endif

    {{-- head --}}
    @if ($title != '')
        <div class="{{ join(' ', $classHead) }} " id="{{ $headId }}">
            <h2 class="card__title">{{ Str::headline($title) }}</h2>
            @if ($head != '')
                {{ $head }}
            @endif
        </div>
    @else
        @if ($head != '')
            <div class="{{ join(' ', $classHead) }} " id="{{ $headId }}">
                @if ($head != '')
                    {{ $head }}
                @endif
            </div>
        @endif
    @endif

    {{-- body --}}
    @if ($body != '')
        <div class="{{ join(' ', $classBody) }} " id="{{ $bodyId }}">
            {{ $body }}
        </div>
    @endif

    {{-- footer --}}
    @if ($footer != '')
        <div class="{{ join(' ', $classFooter) }} " id="{{ $footerId }}">
            {{ $footer }}
        </div>
    @endif
</div>
