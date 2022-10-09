<div class="fixed hidden md:block inset-x-5 inset-y-5 md:w-80 backdrop-blur-md bg-gray-800/60 z-50" id="sidebar">
    <aside class="" aria-label="Sidebar">
        <div class="overflow-y-auto py-5 px-3 bg-sky-400 rounded-md dark:bg-sky-800 h-[96vh] text-white shadow-md">
            <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Laravel Admin</span>
            </a>
            <hr>
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

                        <ul id="dropdown-example" class="hidden py-2 pl-9 space-y-2 transition-all duration-300 bg-sky-500 dark:bg-sky-700 rounded-md">
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
    </aside>
</div>
