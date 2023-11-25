<x-guest-layout>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>customer's login</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->



    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <h3>Login</h3>
                    <div class="theme-card">

                        <x-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}" class="theme-form">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" placeholder="Email"
                                    name="email" :value="old('email')" required autofocus autocomplete="email">
                            </div>
                            <div class="form-group">
                                <label for="review">Password</label>
                                <input id="review" type="password" class="form-control" placeholder="Password"
                                    name="password" required autocomplete="current-password">
                            </div>

                            <x-button class="btn btn-solid">
                                {{ __('Login') }}
                            </x-button>
                        </form>
                        <br>
                        <br>
                        <p>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Lupa Password?') }}
                                </a>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to
                            be
                            able to order from our shop. To start shopping click register.</p><a
                            href="{{ route('register') }}"" class="btn btn-solid">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

</x-guest-layout>
