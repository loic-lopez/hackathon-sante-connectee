<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DiabHealth Register</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch'
          href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="/css/login_style.css">


</head>

<body>

<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
    <h1>Register</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
    <div class="form">
    </div>
    {{--<div class="form">--}}
    {{--<h2>Login to your account</h2>--}}
    {{--<form>--}}
    {{--<input type="text" placeholder="Username"/>--}}
    {{--<input type="password" placeholder="Password"/>--}}
    {{--<button>Login</button>--}}
    {{--</form>--}}
    {{--</div>--}}
    <div class="form">
        <h2>Create an account</h2>
            <form method="post" action="{{ route('register') }}">
                {{ csrf_field() }}
                <input type="text" name="username" placeholder="Username"/>
                <input type="text" name="firstname" placeholder="First Name"/>
                <input type="text" name="lastname" placeholder="Last Name"/>
                <input type="password" name="password" placeholder="Password"/>
                <input type="password" name="password_confirmation" placeholder="Confirm Password"/>
                <input type="email" name="email" placeholder="Email Address"/>
                <input type="tel" name="phone" placeholder="Phone Number"/>
                <button>Register</button>
            </form>
    </div>
    {{--<div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>--}}
</div>

</body>
</html>
