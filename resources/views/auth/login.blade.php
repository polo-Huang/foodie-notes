@extends('layout.header')

@section('title')
     Log In
@endsection

@section('link')
  <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login">
    <!-- Login & Signup -->
    <section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(../../assets/img-temp/1920x1080/img24.jpg);">
      <div class="container u-bg-overlay__inner">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-8">
            <!-- Heading -->
            <h1 class="g-color-white text-uppercase mb-4">Login or register an account</h1>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
            <p class="lead g-color-white">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            <!-- End Heading -->
          </div>
        </div>

        <div class="row justify-content-center align-items-center no-gutters">
          <div class="col-lg-5 g-bg-teal g-rounded-left-5--lg-up">
            <div class="g-pa-50">
              <!-- Form -->
              <form class="g-py-15" method="POST" action="{{ action('Auth\LoginController@login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h2 class="h3 g-color-white mb-4">Login</h2>
                <div class="form-group g-pos-rel mb-4 {{ $errors->has('email') ? ' u-has-error-v1-3' : '' }}">
                  <div class="input-group">
                    <span class="input-group-addon g-width-45 g-brd-white g-color-white">
                      <i class="icon-communication-062 u-line-icon-pro"></i>
                    </span>
                    <input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="text" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                  </div>
                  @if ($errors->has('email'))
                    <small class="form-control-feedback d-block g-pos-abs g-top-minus-20 g-right-0 g-bg-red g-color-white g-font-size-12 g-px-14 g-py-3 mt-0">{{ $errors->first('email') }}</small>
                  @endif
                  @if ($errors->has('login_fail'))
                    <small class="form-control-feedback d-block g-pos-abs g-top-minus-20 g-right-0 g-bg-red g-color-white g-font-size-12 g-px-14 g-py-3 mt-0 g-z-index-3">{{ $errors->first('login_fail') }}</small>
                  @endif
                </div>

                <div class="form-group g-pos-rel g-mb-40 {{ $errors->has('password') ? ' u-has-error-v1-3' : '' }}">
                  <div class="input-group rounded">
                    <span class="input-group-addon g-width-45 g-brd-white g-color-white">
                          <i class="icon-media-094 u-line-icon-pro"></i>
                        </span>
                    <input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="password" id="password" name="password" placeholder="Password">
                  </div>
                  @if ($errors->has('password'))
                    <small class="form-control-feedback d-block g-pos-abs g-top-minus-20 g-right-0 g-bg-red g-color-white g-font-size-12 g-px-14 g-py-3 mt-0 g-z-index-3">{{ $errors->first('password') }}</small>
                  @endif
                </div>

                <div class="g-mb-60">
                  <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Login</button>
                </div>

                <div class="text-center g-pos-rel pb-2 g-mb-60">
                  <div class="d-inline-block w-100 g-height-1 g-bg-white"></div>
                  <span class="u-icon-v2 u-icon-size--lg g-brd-white g-color-white g-bg-teal g-font-size-default rounded-circle text-uppercase g-absolute-centered g-pa-24">OR</span>
                </div>

                <a href="{{url('/facebook_redirect')}}"><button class="btn btn-block u-btn-facebook rounded text-uppercase g-py-13 g-mb-15" type="button">
                  <i class="mr-3 fa fa-facebook"></i>
                  <span class="g-hidden-xs-down">Login with</span> Facebook
                </button></a>
                <a href="{{url('/google_redirect')}}"><button class="btn btn-block u-btn-twitter rounded text-uppercase g-py-13" type="button">
                  <i class="mr-3 fa fa-google-plus"></i>
                  <span class="g-hidden-xs-down">Login with</span> Google
                </button></a>
              </form>
              <!-- End Form -->
            </div>
          </div>

          <div class="col-lg-5 g-bg-white g-rounded-right-5--lg-up">
            <div class="g-pa-50">
              <!-- Form -->
              <form class="g-py-15" method="POST" action="{{ action('Auth\RegisterController@register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h2 class="h3 g-color-black mb-4">Signup</h2>
                <p class="mb-4">Profitable contracts, invoices &amp; payments for the best cases!</p>

                <div class="form-group g-pos-rel mb-4 {{ $errors->has('register_email') ? ' u-has-error-v1-3' : '' }}">
                  <div class="input-group rounded">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-communication-062 u-line-icon-pro"></i>
                        </span>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" name="register_email" placeholder="Your email">
                  </div>
                  @if ($errors->has('register_email'))
                    <small class="form-control-feedback d-block g-pos-abs g-top-minus-20 g-right-0 g-bg-red g-color-white g-font-size-12 g-px-14 g-py-3 mt-0 g-z-index-3">{{ $errors->first('register_email') }}</small>
                  @endif
                </div>

                <div class="form-group g-pos-rel mb-4 {{ $errors->has('register_name') ? ' u-has-error-v1-3' : '' }}">
                  <div class="input-group rounded">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-finance-067 u-line-icon-pro"></i>
                        </span>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" name="register_name" placeholder="User name">
                  </div>
                  @if ($errors->has('register_name'))
                    <small class="form-control-feedback d-block g-pos-abs g-top-minus-20 g-right-0 g-bg-red g-color-white g-font-size-12 g-px-14 g-py-3 mt-0 g-z-index-3">{{ $errors->first('register_name') }}</small>
                  @endif
                </div>

                <div class="form-group g-pos-rel mb-4 {{ $errors->has('register_password') ? ' u-has-error-v1-3' : '' }}">
                  <div class="input-group rounded">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-media-094 u-line-icon-pro"></i>
                        </span>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="password" name="register_password" placeholder="Your password">
                  </div>
                  @if ($errors->has('register_password'))
                    <small class="form-control-feedback d-block g-pos-abs g-top-minus-20 g-right-0 g-bg-red g-color-white g-font-size-12 g-px-14 g-py-3 mt-0 g-z-index-3">{{ $errors->first('register_password') }}</small>
                  @endif
                </div>

                <div class="form-group g-pos-rel mb-4 {{ $errors->has('register_password_confirmation') ? ' u-has-error-v1-3' : '' }}">
                  <div class="input-group rounded">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-communication-128 u-line-icon-pro"></i>
                        </span>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="password" name="register_password_confirmation" placeholder="Confirmation password">
                  </div>
                  @if ($errors->has('register_password_confirmation'))
                    <small class="form-control-feedback d-block g-pos-abs g-top-minus-20 g-right-0 g-bg-red g-color-white g-font-size-12 g-px-14 g-py-3 mt-0 g-z-index-3">{{ $errors->first('register_password_confirmation') }}</small>
                  @endif
                </div>

                <div class="mb-1">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </div>
                    I accept the <a href="#">Terms and Conditions</a>
                  </label>
                </div>

                <div class="mb-3">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </div>
                    Subscribe to our newsletter
                  </label>
                </div>

                <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Login</button>
              </form>
              <!-- End Form -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Login & Signup -->
</div>
@include('layout.footer')
@endsection
