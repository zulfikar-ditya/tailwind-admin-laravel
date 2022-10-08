<x-guest-layout>
    <x-auth-card>

        <div class="">
            <h1 class="text__primary">Forgot password.</h1>
            <hr class="border__primary my-4">
            <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

            <div class="my-10">
                <x-validate-error />
                <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>
            <x-toast />
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mt-10">
                <x-input type="email" name="email" id="email" required autofocus />

                <x-button type="submit" label="Send Password Reset Link" style="gradient" color="primary" class="mt-10" block />
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
