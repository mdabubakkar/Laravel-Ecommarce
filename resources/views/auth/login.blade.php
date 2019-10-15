
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('user/layouts/head')
</head>
<body>
<!-- ========================= HEADER MAIN S========================= -->
    @include('user/layouts/header')
<!-- ========================= HEADER MAIN E========================= -->

<!-- ========================= SECTION MAIN ========================= -->

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y-sm bg">
<div class="container">

<header class="section-heading heading-line">
    <!-- <h4 class="title-section bg">MACHINERY</h4> -->
</header>

<div class="card">
<div class="row no-gutters">
    <div class="col-md-3">
    
<article href="#" class="card-banner h-100 bg2">
    <div class="card-body zoom-wrap">
        <h5 class="title">Machinery items for manufacturers</h5>
        <p>Consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, c</p>
        <a href="#" class="btn btn-warning">Explore</a>
        <img src="images/items/item-sm.png" height="200" class="img-bg zoom-in">
    </div>
</article>
</div> <!-- col.// -->

    <div class="col-md-9">
        <div class="card text-white bg-info mb-3">
          <div class="card-header font-italic text-center">LOGIN</div>
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
          </div>
        </div>

        

    </div> <!-- col.// -->
</div> <!-- row.// -->
    
</div> <!-- card.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
 @show

<!-- ========================= FOOTER ========================= -->
 @include('user/layouts/footer')
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>










