@extends('layouts.loginapp')

@section('content')

     
                <div class="g-bg-white rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Signup</h2>
                    </header>

                    <!-- Form -->
                    <form class="g-py-15" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                    
                            <div class="mb-4 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input value="{{ old('name') }}" required autofocus name="name" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-orange--hover rounded g-py-15 g-px-15" type="text" placeholder="John Doe">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
        
                        <div class="mb-4 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input value="{{ old('email') }}" required name="email"class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-orange--hover rounded g-py-15 g-px-15" type="email" placeholder="johndoe@gmail.com">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 mb-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input name="password" id="password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-orange--hover rounded g-py-15 g-px-15" type="password" placeholder="Password">
                            </div>

                            <div class="col-xs-12 col-sm-6 mb-4">
                                <input id="password-confirm" name="password_confirmation" required class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-orange--hover rounded g-py-15 g-px-15" type="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="row justify-content-between">

                            <div class="col align-self-center text-right">
                                <button class="btn btn-block u-btn-orange rounded g-py-13 g-px-25" type="submit">Register Account</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->

                    <footer class="text-center">
                        <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Already have an account? <a class="g-font-weight-600 g-color-orange" href="{{ route('login') }}">Sign In</a>
                        </p>
                    </footer>
                </div>
      
    
<!-- End Signup -->
@endsection
