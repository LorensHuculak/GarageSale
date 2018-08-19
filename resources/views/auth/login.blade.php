@extends('layouts.loginapp')

@section('content')
<div class="g-bg-white rounded g-py-40 g-px-30">
        <header class="text-center mb-4">
            <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
        </header>

        <!-- Form -->
        <form class="g-py-15" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
            <div class="mb-4 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input value="{{ old('email') }}" required autofocus class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-orange--hover rounded g-py-15 g-px-15" name="email" type="email" placeholder="johndoe@gmail.com">
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>

            <div class="g-mb-35 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-orange--hover rounded g-py-15 g-px-15 mb-3" type="password" placeholder="Password" name="password" required>
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                <div class="row justify-content-between">
                    <div class="col align-self-center">
                        <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                <i class="fa" data-check-icon="&#xf00c"></i>
                            </div>
                            Keep signed in
                        </label>
                    </div>
                    <div class="col align-self-center text-right">
                        <a class="g-font-size-12 g-color-orange" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <button class="btn btn-md btn-block u-btn-orange rounded g-py-13" type="submit">Login</button>
            </div>
        </form>
        <!-- End Form -->

        <footer class="text-center">
            <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Don't have an account? <a class="g-font-weight-600 g-color-orange" href="{{ route('register') }}">Sign Up</a>
            </p>
        </footer>
    </div>
@endsection
