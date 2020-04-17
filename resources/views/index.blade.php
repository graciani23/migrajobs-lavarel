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
    <section class="sobrenos">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-sm-12">
                    <h2 class="quem">QUEM</h2>
                    <h6 class="somos">SOMOS?</h6>
                     <p class="psobrenos"> A MigraJobs acredita na reinserção social e econômica de imigrantes e refugiados no Brasil. Mais que uma plataforma de empregos, visamos a inclusão social, econômica e cultural de quem imigrou para o Brasil</p>
                </div>
                <div class="col col-lg-4 col-sm-12">
                    <h2 class="quem"> O QUE </h2>
                    <h6 class="somos">FAZEMOS?</h6>
                    <p class="psobrenos">Nosso papel é servir como ponte entre imigrantes e refugiados que buscam trabalho digno e empresas que querem contratar. Nossa missão é promover o encontro de pessoas talentosas com empresas que precisam de gente em diversas áreas de atuação</p>
                </div>
                <div class="col col-lg-4 col-sm-12">
                    <h2 class="quem"> QUEM </h2>
                    <h6 class="somos">NOS APOIA?</h6>
                    <p class="psobrenos">Contamos com o suporte de ONGS como o CAMI (Centro de Apoio ao Imigrante) para realizar a triagem e cadastro de perfis e ao mesmo tempo buscamos parcerias de empresas que acredite nos nossos valores e nossa missão</p>
            </div>
        </div>
   </section>
   <main>
        <h3 id="cadastro" class="h3">FAÇA PARTE DO NOSSO PROJETO</h3>
        <div class="row">
            <div class="col-sm-6">
                <h4>Quero mudar minha vida</h4>
                <div class="form">
                    <h5 class="card-title">SOU IMIGRANTE</h5>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuário">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    <br>
                    </div>
                    <div class="form-group form-check">
                            <a href="" class="senha"> Esqueci minha senha</a>
                            <a href="cad-log-imigrante" class="senha">Quero me cadastrar</a>
                    <div>
                        <button type="submit" class="entrar">Entrar</button>
                        </div>
                    </div>
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
        <div class="col-sm-12">
            <h4 id="link-contato">Dúvidas?</h4>
                <div class="form-contato">
                    <h5 class="card-title"><a name="FALE CONOSCO">FALE CONOSCO</h5>
                    <form method="post" action="{{ action('MessageController@enviarEmail') }}" enctype="multpart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nome"></label>
                        <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Nome de usuário" name="nome" value="{{ old('name') }}">
                            {!! $errors->first('name', '<small>:message</small>') !!}<br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="email" value="{{ old('email') }}">
                            {!! $errors->first('email', '<small>:message</small>') !!}<br>
                        </div>
                        <br>
                        <div class="form-group-mensagem">
                        <textarea name="mensagem" id="mensagem" cols="30" rows="6" class="form-control" placeholder="Escreva sua mensagem">{{ old('mensagem') }}</textarea>
                        {!! $errors->first('mensagem', '<small>:message</small>') !!}<br>
                        </div>
                        <br>
                        <div class="form-group form-check">
                            <button type="submit" class="entrar">Enviar</button>
                        </div>
                    </form>
                </div>
        <br>
    </section>

        @include('.includes/footerQS')

        <link rel="stylesheet" href="/css/estilofooterqs.css">
</body>
</html>
