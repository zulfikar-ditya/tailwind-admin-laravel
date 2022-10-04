@php
if ($color != 'primary') {
    $color = 'thead__' . $color;
} else {
    $color = 'thead__primary';
}
@endphp
<div class="table__responsive">
    <table class="table" id="{{ $id }}">

        @if ($caption && $caption != '')
            <caption class="table__caption">
                {{ $caption }}
            </caption>
        @endif

        @if ($head && $head != '')
            <thead class="{{ $color }}">
                {{ $head }}
            </thead>
        @endif
        @if ($body && $body != '')
            <tbody>
                {{ $body }}
            </tbody>
        @endif
        @if ($footer && $footer != '')
            <tfoot>
                {{ $footer }}
            </tfoot>
        @endif
    </table>
</div>
