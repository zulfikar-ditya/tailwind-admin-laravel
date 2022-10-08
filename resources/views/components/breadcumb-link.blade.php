<li>
    <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
        </svg>
        <a href="{{ $active ? '#' : $link }}" class="ml-1 font-medium md:ml-2 {{ $active ? 'text-sky-500 hover:text-sky-400 underline cursor-default pointer-events-none' : 'text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white' }}">{{ Str::headline($slot) }}</a>
    </div>
</li>
