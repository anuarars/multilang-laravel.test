<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <!-- Map CSS -->
<!-- Jquery UI datepicker -->
    <link rel="stylesheet" href="{{ asset('templates/v1/css/jquery.ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/v1/css/jquery.ui.datepicker.css') }}" />
<!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('templates/v1/packages/barryvdh/elfinder/css/elfinder.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/v1/packages/barryvdh/elfinder/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/v1/css/theme.bundle.css')}} " />
    <link rel="stylesheet" href="{{ asset('templates/v1/css/libs.bundle.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Title -->
    <title>Администрирование | ЦМиСПИ</title>
</head>
<body>

<!-- MAIN CONTENT -->
<div class="main-content">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Войти</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('login', true)}}">
                            @csrf

                            <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Почта</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Пароль</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="loginPage">
                                        Войти
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request', true) }}">
                                            Забыли пароль?
                                        </a>
                                    @endif
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- / .main-content -->

<!-- JAVASCRIPT -->
<!-- Map JS -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Vendor JS -->
<script src="{{ asset('templates/v1/js/vendor.bundle.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('templates/v1/js/theme.bundle.js') }}"></script>
<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('templates/v1/js/packages/barryvdh/elfinder/js/elfinder.min.js') }}"></script>
<script src="{{ asset('templates/v1/js/packages/barryvdh/elfinder/js/i18n/elfinder.ru.js') }}"></script>
<script src="{{ asset('templates/v1/js/back.js') }}?{{ date('Y-m-d-h-i-s') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

</body>
</html>