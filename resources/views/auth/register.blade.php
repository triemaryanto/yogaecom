<x-guest-layout>


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>create account</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>create account</h3>
                    <x-validation-errors class="mb-4" />
                    <div class="theme-card">
                        <form method="POST" action="{{ route('register') }}" class="theme-form">
                            @csrf
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">First Name</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Last Name</label>
                                    <input type="password" class="form-control" id="lname" placeholder="Last Name"
                                        required="">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Password</label>
                                    <input type="password" class="form-control" id="review"
                                        placeholder="Enter your password" required="">
                                </div>
                                <x-button class="btn btn-solid w-auto">
                                    {{ __('Create') }}
                                </x-button>
                            </div>
                        </form>
                        <p class="mt-20">Already hava an account ?<a href="{{ route('login') }}"> Login</a></p>
                        <p><a href="{{ route('password.request') }}"> Lupa Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
</x-guest-layout>
