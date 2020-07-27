<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Interest Finder</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3">
                        <img style="width:100%; height:100%" src="{{asset('images/logo.png')}}"/>
                        </div>
                        <div class="modal-dialog w-100 mx-auto" style="margin-top: 0px">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Sign In</div>
                                            <!--<span>Please sign in to your account below.</span>-->
                                        </h4>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="email" id="exampleEmail" placeholder="Email..."
                                                        type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="password" id="examplePassword"
                                                        placeholder="Password..." type="password"
                                                        class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check">
                                            <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"
                                                class="form-check-input">
                                            <label for="remember" class="form-check-label">Keep me logged in</label>
                                        </div>
                                    </form>
                                    <!--<h6 class="mb-0">No account? <a href="javascript:void(0);" class="text-primary">Sign
                                            up now</a></h6>-->
                                </div>
                                <div class="modal-footer clearfix">
                                    <div class="float-left">
                                        <a href="{{ route('password.request') }}" class="btn-lg btn btn-link">	
                                            Forgotten account?</a>
                                    </div>
                                    <div class="float-right">
                                    <button type="submit" class="btn btn-primary btn-lg" >Log In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright Interest Finder © 2020</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>



</html>
