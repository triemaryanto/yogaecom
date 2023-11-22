<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <h2 class="text-center">Welcome Back</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control" placeholder="Email" name="email"
                    :value="old('email')" required autofocus autocomplete="username">
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password"
                    required autocomplete="current-password">
            </div>
            <div class="text-center">
                <x-button class="ms-4">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>

        <p class="mt-20">Tidak punya Akun ?<a href="{{ route('register') }}"> daftar</a></p>
        <p class="mt-20">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
            @endif
        </p>
    </x-authentication-card>
</x-guest-layout>
