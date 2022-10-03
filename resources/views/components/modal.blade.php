@php
if ($headColor) {
    $headColor = 'modal__head__' . $headColor;
} else {
    $headColor = 'modal__head';
}
@endphp
<!-- Main modal -->
<div id="{{ $target }}" tabindex="-1" aria-hidden="true" class="modal hidden" data-modal-placement="{{ $placement }}">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="{{ $headColor }}">
                <h3 class="text-xl font-semibold">
                    {{ Str::headline($title) }}
                </h3>
                <button type="button" class=" bg-transparent hover:bg-gray-200 rounded text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600" data-modal-toggle="{{ $target }}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            @if ($body && $body != '')
                <!-- Modal body -->
                <div class="p-4 space-y-4">
                    {{ $body }}
                </div>
            @endif

            @if ($footer && $footer != '')
                <!-- Modal footer -->
                <div class="p-4 rounded-b border-t dark:border-gray-600">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
