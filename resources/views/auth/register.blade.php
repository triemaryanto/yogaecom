<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
            </div>


            <x-button class="ms-4">
                {{ __('Daftar') }}
            </x-button>
        </form>
        <p class="mt-20">Already hava an account ?<a href="{{ route('login') }}"> Login</a></p>
        <p><a href="{{ route('password.request') }}"> Lupa Password?</a></p>
    </x-authentication-card>
</x-guest-layout>
