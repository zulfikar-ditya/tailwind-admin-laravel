<div class="container mx-auto">
    <div class="flex flex-wrap sm:justify-center justify-between items-center pt-6 sm:pt-0 min-h-screen">
        <div class="w-full lg:w-6/12  mt-6 px-6 py-4">
            <div class="w-full lg:w-8/12 bg-white dark:bg-gray-800 py-20 px-10 rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <div class="w-full lg:w-6/12 hidden lg:block mt-6 px-6 py-4">
            <div class="overflow-hidden rounded-lg shadow-md">
                <img src="{{ asset('images/bg-auth.jpg') }}" class="rounded-lg h-[75vh] img__fit hover:scale-105 transition-all" alt="Photo by Quintin Gellar: https://www.pexels.com/photo/brown-metal-bridge-near-building-612949/">
            </div>
        </div>
    </div>
</div>
