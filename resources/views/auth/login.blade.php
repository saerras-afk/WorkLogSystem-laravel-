<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   
</head>
<body id="page-top">

 <div class="login-form">
    <div>
        <div>
            <img id="img_logo" alt="Logo" src="@Url.Content("~/Content/Images/Logo.png")" />
        </div>
    </div>
    <div>

        <form method='POST' action="{{ route('login') }}">
                @csrf
                <input class="input" type="text" name="username" value="{{ old('username') }}">
                <input class="input" type="password" name="password" value="{{ old('password') }}">
                <button id="login" type="submit">Login</button>
                <p>Satisfaction with iComm Work Log System</p>
        </form>
    </div>
</div> 

</body>

</html>

 
 
 
 
 
 
 
 