<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Integrador - Refugiados</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/estiloSobreNos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
        @include('includes/menuResponsivo')
    <div class="fundo">
        <h2 class="h2">Recomeço além das fronteiras</h2>
            <button class="botao">
                <a href="#cadastro" class="participe">Participe</a>
            </button>
            <br> <br> <br>
        </div>
        <div class="fundo">
    </div>

   <main>
        <h3 id="cadastro" class="h3">FAÇA PARTE DO NOSSO PROJETO</h3>
        <div class="row">
            <div class="col-sm-6">
                <h4>Quero mudar minha vida</h4>
                <div class="form">
                    <h5 class="card-title">SOU IMIGRANTE</h5>
                <form action="{{ route('admin.login.valida') }}" method="post">
                    @csrf

                    @if($errors->all())
                        @foreach ($errors->all() as $errors)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuário" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
                    <br>
                    </div>
                    <div class="form-group form-check">
                            <a href="" class="senha"> Esqueci minha senha</a>
                            <a href="cad-log-imigrante" class="senha">Quero me cadastrar</a>
                    <div>
                        <button type="submit" class="entrar">Entrar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="col-sm-6">
                <h4>Quero mudar outras vidas</h4>
                <div class="form">
                    <h5 class="card-title">SOU EMPRESA</h5>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuário">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <br>
                    <div class="form-group form-check">
                        <a href="http://" class="senha">Esqueci minha senha</a>
                        <a href="cad-log-empresa" class="senha">Quero me cadastrar</a>
                    <div>
                        <button type="submit" class="entrar">Entrar</button>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <section>


        @include('.includes/footerQS')

        <link rel="stylesheet" href="/css/estilofooterqs.css">
</body>
</html>
