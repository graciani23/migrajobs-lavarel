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
        <form method="POST" action="{{ action('ImigranteController@store') }}" enctype="multpart/form-data">
            @csrf
            <h2><strong>Cadastre seu currículo e tenha acesso aos nossos serviços</strong></h2>
            <input type="text" id="inputName" placeholder="Digite seu nome completo" name="name" value="{{ old('name') }}">
            {!! $errors->first('name', '<small>:message</small>') !!}<br>
            <div class="genero">
                <input type="radio" name="genero" id="masculino" value="masculino" checked>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="feminino" value="feminino">
                <label for="feminino">Feminino</label>
            </div>
            <!--
            <div class="nasc">
                <label class="labelForm" for="nascimento">Data de nascimento</label>
                <input type="date" value="2011-08-19" id="nascimento" placeholder="Data de nascimentos" name="nascimento">
            </div>
            -->
            <input type="email" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
            {!! $errors->first('email', '<small>:message</small>') !!}<br>
            <input type="password" id="inputPassword" placeholder="Senha" name="senha">
            {!! $errors->first('senha', '<small>:message</small>') !!}<br>
            <input type="password" id="inputConfirmPassword" placeholder="Confirme sua senha" name="confSenha">

                @include('includes/comboBoxPaises')

            <button type="submit" class="btn btn-light">Cadastrar</button>
        </form>
    </div>

        @include('includes/footer')


    <link rel="stylesheet" href="/css/estiloCadUsuarioEmpresa.css">
    <link rel="stylesheet" href="/css/estiloMenuNav.css">

    <link rel="stylesheet" href="/css/estiloFooter.css">



</body>
</html>
