@extends('layouts.app')

@section('content')
<!-- Scripts -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

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
        </div>
    </div>
</div> -->
{{-- <div>
<form method='POST' action="{{ route('login') }}">
    @csrf
    <input type="text" name="username" value="{{ old('username') }}">
    <input type="password" name="password" value="{{ old('password') }}">
    <button type="submit">login</button>
</form>
</div> --}}
 <div class="login-form">
    <div>
        {{-- <div>
            <img id="img_logo" alt="Logo" src="@Url.Content("~/Content/Images/Logo.png")" />
        </div> --}}
    </div>
    <div>

            <form method='POST' action="{{ route('login') }}">
                    @csrf
                    <input class="input" type="text" name="username" value="{{ old('username') }}">
                    <input class="input" type="password" name="password" value="{{ old('password') }}">
                    <button id="login" type="submit">Login</button>
                    <p>Satisfaction with iComm Work Log System</p>
            </form>
        {{-- @using (Html.BeginForm("Validate", "Login", FormMethod.Post))
        {

            @Html.TextBoxFor(model => model.userName, new { placeholder = "Username", @required = "required", @class = "input" })

            @Html.TextBoxFor(model => model.password, new { placeholder = "Password", @required = "required", @type = "password", @class = "input" })
            <br />
            <br>
            <label class="field-validation-error">@Html.DisplayFor(model => model.LoginErrorMessage)</label>
            <br>
            <input type="submit" name="name" id="login" value="Login" />
            <p/>
            <p>Satisfaction with iComm Work Log System</p>
        } --}}
    </div>
</div> 
@endsection
