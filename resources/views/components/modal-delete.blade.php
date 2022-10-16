<div id="{{ $target }}" tabindex="-1" aria-hidden="true" class="modal hidden">
    <div class="relative flex p-4 w-full max-w-md h-screen md:h-auto items-center">
        <div class="relative bg-white rounded shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="{{ $target }}">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <form action="{{ $link }}" method="post">
                @method('DELETE')
                @csrf
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 w-20 h-20 text-rose-500 dark:text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="mb-5">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-300">{{ $title }}</h3>
                        <h3 class="text-lg font-normal text-gray-800 dark:text-gray-300">{{ $description }}</h3>
                    </div>
                    <x-button type="submit" color="danger" label="Yes Delete">
                        Yes, I'm sure
                    </x-button>
                    <x-button target="{{ $target }}" type="reset" color="secondary" label="No Cancel" />
                </div>
            </form>
        </div>
    </div>
</div>
