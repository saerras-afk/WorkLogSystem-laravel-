<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <link href="{{ asset('css/login.css') }}" rel="stylesheet"> 
</head>
<body id="page-top">

 <div class="login-form">
    <div>
        <div>
            <!-- <img id="img_logo" alt="Logo" src="@Url.Content("~/Content/Images/Logo.png")" /> -->
            <img src="{{url('/images/Logo.PNG')}}" alt="Image" > 
        </div>
    </div>
    <div>

        <form method='POST' action="{{ route('login') }}">
                @csrf
                <input class="input" type="text" placeholder="Username" name="username" value="{{ old('username') }}">
                <input class="input" type="password" placeholder="Password" name="password" value="{{ old('password') }}">
                <br>
                <br>
                <button id="login" type="submit">Login</button>
                <p>Satisfaction with iComm Work Log System</p>
        </form>
    </div>
</div> 

</body>

</html>

 
 
 
 
 
 
 
 