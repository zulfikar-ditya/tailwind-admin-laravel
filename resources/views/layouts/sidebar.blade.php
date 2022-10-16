<div id="sidebar" class="fixed z-40 h-[95vh] p-4 overflow-y-auto bg-sky-400 w-80 dark:bg-sky-800 inset-5 sidebar rounded-md shadow-md">

    <a href="{{ route('dashboard') }}">
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white ml-2">{{ config('app.name') }}</span>
    </a>
    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 items-center dark:hover:bg-gray-600 dark:hover:text-white sidebar-toggle inline-flex md:hidden" id="close-sidebar-toggle">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <hr class="border border-white mt-5">
    <div class="overflow-y-auto">
        <ul class="space-y-2 mt-7">
            <li>
                <a href="{{ route('dashboard') }}" class="nav__link">
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            @if (env('APP_ENV') == 'local')
                <li>
                    <button type="button" class="nav__dropdown" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Component</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <ul id="dropdown-example" class="hidden py-2 pl-9 space-y-2 transition-all duration-300 bg-sky-500 dark:bg-sky-900 rounded-md">
                        <li>
                            <a href="{{ route('test-component.input') }}" class="nav__link">Input</a>
                        </li>
                        <li>
                            <a href="{{ route('test-component.button') }}" class="nav__link">Button</a>
                        </li>
                        <li>
                            <a href="{{ route('test-component.modal') }}" class="nav__link">Modal</a>
                        </li>
                        <li>
                            <a href="{{ route('test-component.table') }}" class="nav__link">Table</a>
                        </li>
                        <li>
                            <a href="{{ route('test-component.card') }}" class="nav__link">Card</a>
                        </li>
                        <li>
                            <a href="{{ route('test-component.breadcumb') }}" class="nav__link">Breadcumb</a>
                        </li>
                        <li>
                            <a href="{{ route('test-component.test-toast') }}" class="nav__link">Toast</a>
                        </li>
                        <li>
                            <a href="{{ route('test-component.test-validate') }}" class="nav__link">Validate</a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
