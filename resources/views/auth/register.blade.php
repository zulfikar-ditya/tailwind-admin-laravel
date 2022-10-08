<x-guest-layout>
    <x-auth-card>

        <div class="">
            <h1 class="text__primary">Sign up.</h1>
            <hr class="border__primary my-4">
            <p>Enter your name, email, and password to sign up .</p>

            <div class="my-10">
                <x-validate-error />
                <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>
            <x-toast />
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="my-10">
                <x-input type="text" name="name" id="name" required autofocus />
                <x-input type="email" name="email" id="email" required />
                <x-input type="password" name="password" id="password" required />
                <x-input type="password" name="password_confirmation" id="password_confirmation" required />
                <x-button type="submit" label="register" style="gradient" color="primary" class="mt-10" block />
            </div>

            <hr class="border__primary my-4">

            <div class="text-center">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
