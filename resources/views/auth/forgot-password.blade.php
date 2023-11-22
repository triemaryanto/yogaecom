<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <p>Please enter the email address for your account. A verification code will be sent to you. Once you have
                received the verification code, you will be able to choose a new password for your account.</p>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Account email address"
                    name="email" :value="old('email')" required autofocus autocomplete="username">
            </div>
            <x-button>
                {{ __('Request password reset') }}
            </x-button>
        </form>
        <p class="mt-20"><a href="{{ route('login') }}">Back to log in</a></p>

    </x-authentication-card>
</x-guest-layout>
