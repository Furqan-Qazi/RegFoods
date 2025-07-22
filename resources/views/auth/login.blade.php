<x-guest-layout>
    @if(session('success'))
        <div class="text-green-600 mb-4 text-center">
            {{ session('success') }}
        </div>
    @endif

    @if(session('status'))
        <div class="text-sm text-green-600 text-center mb-4">
            {{ session('status') }}
        </div>
    @endif

    <!--=========================
        SIGNIN START
    ==========================-->
    <section class="signin pt_100 xs_pt_70 pb_100 xs_pb_70">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-5 col-sm-10 col-md-8 col-lg-6">
                    <div class="login_area">
                        <h2>Welcome back!</h2>
                        <p>Sign in to continue</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <!-- Email -->
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                        @error('email')
                                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input type="password" name="password" required placeholder="Password">
                                        @error('password')
                                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="col-xl-12">
                                    <div class="login_imput login_check_area">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                            <label class="form-check-label" for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Login Button -->
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <button type="submit" class="common_btn">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <p class="or"><span>or</span></p>
                        <ul class="d-flex">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>

                        <p class="create_account">
                            Don’t have an account? <a href="{{ route('register') }}">Create Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SIGNIN END
    ==========================-->
</x-guest-layout>
