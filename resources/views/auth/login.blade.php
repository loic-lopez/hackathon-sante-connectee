<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>DiabHealth</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="/css/login_style.css">
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap/bootstrap.min.css">


</head>

<body>

<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
    <h1>Se connecter</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
    <div class="form">
    </div>
    <div class="form">
        <h2>Login to your account</h2>

        @if($errors->count())
            @foreach ($errors->all() as $error)
                <div class="label-danger">{{ $error }}</div>
            @endforeach
        @endif

        <form method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            <input type="text" name="username" placeholder="Nom d'utilisateur"/>
            <input type="password" name="password" placeholder="Mot de passe"/>
            <button>Se connecter</button>
        </form>
        <a href="/register">S'enregistrer</a>
    </div>
</div>

</body>
</html>
