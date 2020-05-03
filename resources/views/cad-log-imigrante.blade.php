<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <title>Login Usuário</title>
</head>
<body>
        @include('includes/menuNav')

    <div class="corpo-form">
        <form method="POST" action="{{ route('register') }}" enctype="multpart/form-data">
            @csrf
            <h2><strong>Cadastre seu currículo e tenha acesso aos nossos serviços</strong></h2>
            <div class="form-group">
                <input type="text" id="inputName" placeholder="Digite seu nome completo" name="name" value="{{ old('name') }}">
                {!! $errors->first('name', '<small>:message</small>') !!}<br>
            </div>
            <div class="form-group">
                <input type="email" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
                {!! $errors->first('email', '<small>:message</small>') !!}<br>
            </div>
            <div class="form-group">
                <input type="password" id="inputPassword" placeholder="Senha" name="password">
                {!! $errors->first('senha', '<small>:message</small>') !!}<br>
            </div>
            <div class="form-group">
                <input type="password" id="inputConfirmPassword" placeholder="Confirme sua senha" name="password_confirmation">
            </div>
            <div class="form-group">
                <select name="tipo" id="tipo">
                    <option value="">Quem você é?</option>
                    <option value="Empresa">Empresa</option>
                    <option value="Candidato">Candidato</option>
                </select>
            </div>

            <button type="submit" class="btn btn-light">{{ __('Register') }}</button>
        </form>
    </div>

        @include('includes/footer')


    <link rel="stylesheet" href="/css/estiloCadUsuarioEmpresa.css">
    <link rel="stylesheet" href="/css/estiloMenuNav.css">

    <link rel="stylesheet" href="/css/estiloFooter.css">



</body>
</html>
