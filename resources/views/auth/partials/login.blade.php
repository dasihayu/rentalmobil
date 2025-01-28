<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="flex-grow row">
                <div class="mx-auto col-lg-4">
                    <div class="p-5 text-left auth-form-light">
                        <div class="brand-logo">
                            <a href="{{ url('/') }}"> <img src="{{ asset('back/assets/images/logo.png') }}"></a>
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('login') }}" class="pt-3">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="Email" :value="old('email')" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password"
                                    name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <!-- Remember Me -->
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                </div>
                                <a href="#" class="auth-link text-primary">Forgot password?</a>
                            </div>

                            <!-- Submit Button -->
                            <div class="gap-2 mt-3 d-grid">
                                <button type="submit"
                                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                                    SIGN IN
                                </button>
                            </div>
                        </form>
                        <!-- End Login Form -->

                        <div class="mt-4 text-center font-weight-light">
                            Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
