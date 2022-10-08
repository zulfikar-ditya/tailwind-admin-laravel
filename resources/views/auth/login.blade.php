<x-guest-layout>
    <x-auth-card>

        <div class="">
            <h1 class="text__primary">Sign in.</h1>
            <hr class="border__primary my-4">
            <p>Enter your email and password to sign in.</p>

            <div class="my-10">
                <x-validate-error />
                <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="my-10">
                <x-input type="email" name="email" id="email" required autofocus />
                <x-input type="password" name="password" id="password" required />

                <!-- Remember Me -->
                <div class="block mt-4">
                    <x-input-checkbox name="remember" id='remember' label="remember me" />
                </div>

                <x-button type="submit" label="Login" style="gradient" color="primary" icon="arrow-right-to-bracket" class="mt-10" fontawesome iconRight block />
            </div>

            <hr class="border__primary my-4">

            <div class="text-center">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
