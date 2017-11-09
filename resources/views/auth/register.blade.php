<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Diab'Health</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch'
          href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="/css/login_style.css">
    <!-- Library - Bootstrap v3.3.5 -->

    <script src="/js/jquery.min.js"></script>
    <script src="/libraries/bootstrap/bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>


</head>

<body>

<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
    <h1>S'enregistrer</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
    <div class="form"></div>
    <div class="form">
        <h2>Creer un compte</h2>
            @if($errors->count())
                @foreach ($errors->all() as $error)
                    <div class="label-danger">{{ $error }}</div>
                @endforeach
            @endif
            <form method="post" action="{{ route('register') }}">
                {{ csrf_field() }}
                <input type="text" name="username" placeholder="Nom d'utilisateur"/>
                <input type="text" name="firstname" placeholder="Prénom"/>
                <input type="text" name="lastname" placeholder="Nom"/>
                <input type="password" name="password" placeholder="Mot de passe"/>
                <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe"/>
                <input type="email" name="email" placeholder="Adresse mail"/>
                <input type="tel" name="phone" placeholder="Numéro de téléphone"/>
                <label>
                    Type de compte
                    <select class="selectpicker" name="account_type">
                        <option value="patient">Patient</option>
                        <option value="medecin">Medecin traitant</option>
                        <option value="aidant">Aidant</option>
                    </select>
                </label>
                <br>
                <br>
                <button class="btn-block">Je m'enregistre</button>
            </form>
    </div>
    {{--<div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>--}}
</div>
<script type="text/javascript">
    $('.selectpicker').selectpicker({
        style: 'btn-block',
        size: 7
    });
</script>
</body>
</html>
