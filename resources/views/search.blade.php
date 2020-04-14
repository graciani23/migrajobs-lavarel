<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Search - Job</title>
    <meta name="author" content="Jeferson Silva">

    <!-- Link com as fontes utilizadas para construção do site -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">

    <!-- Reset de todos os estilos CSS -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/search.css">
</head>

<header id="cabecalho">
    <div id="cabecalho-central">
        <!-- MigraJobs logo no header de navegação -->
        <div class="logo">
            <a href="index">MigraJobs</a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Minha área</a></li>
                <li><a href="#">Candidaturas</a></li>
                <li><a href="#">Buscar vagas</a></li>
                <li><a href="curriculo">Currículo</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>

        <div class="user">
            Olá, Jeferson
        </div>

        <img src="assets/icones/user.svg" alt="">
    </div>
</header>

<div>
    <div class="column-left">
        <div class="profile">
            <div class="addPhoto">FOTO</div>
            <div class="nameCandidate">Jeferson Silva</div>
            <div class="liCargo">Analista de Suporte / Service Desk</div>
            <div class="linkCV"><a href="#">Atualizar CV</a></div>
            <div class="statusbargreen"><span>100%</span></div>
        </div>

        <div class="buscar-vagas">
            <h2>Buscar vagas</h2>

            <form action="">
                <input type="text" placeholder="Digite cargo ou área profissional" style="float: left">
                <input type="button" value="Procurar vagas" style="float: left; width: 150px; text-align: center; font-weight: bold; padding: 0;">
                
            </form>
        </div>
    </div>

    <div class="column-vagas">
        <div class="filtrar-vagas">
            <div class="filtrar-vagas-titulo">Fitrar Resultados</div>
                
            <div class="palavra-chave">Palavra-chave</div>

            <div class="input-filtrar-vagas">
                <input type="text" placeholder="'Gerente Comercial'...">
            </div>
            <button>Filtrar</button>
            
            <br><br><hr><br>

            <div class="palavra-chave">Palavra-chave</div>
            
            <label class="container">
                <input type="checkbox">São Paulo - SP [4.501] <br><br>
            </label>
            <label class="container">
                <input type="checkbox">Rio de Janeiro - RJ [840] <br><br>
            </label>
            <label class="container">
                <input type="checkbox">Bahia - BA [2.209] <br><br>
            </label>
            <label class="container">
                <input type="checkbox">R. Grande do Sul - RS [1.021] <br><br>
            </label>
        </div>

        <div class="vagas">
            <div class="titulo"> Atendente de Chat</div>
            <div class="subtitulo">Telemarketing - SAC</div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse doloribus debitis ullam labore architecto assumenda unde. Commodi ea asperiores, quidem vel amet.
                O Profissional Irá Executar Atividades Relacionadas A Vendas Dos Produtos Onde Seu Foco É Satisfazer As Necessidades Dos Clientes. Captação E Formação De Carteira De Futuros Clientes Para Os Projetos Pelo Telefone, Chat E Pessoal. Ter Habilidade Na Interpretação Das Informações Técnicas Referen ... <a href="#">Visualizar Vaga</a>
            </p>
        </div>

        <div class="vagas">
            <div class="titulo"> Atendente de Chat</div>
            <div class="subtitulo">Telemarketing - SAC</div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse doloribus debitis ullam labore architecto assumenda unde. Commodi ea asperiores, quidem vel amet.
                O Profissional Irá Executar Atividades Relacionadas A Vendas Dos Produtos Onde Seu Foco É Satisfazer As Necessidades Dos Clientes. Captação E Formação De Carteira De Futuros Clientes Para Os Projetos Pelo Telefone, Chat E Pessoal. Ter Habilidade Na Interpretação Das Informações Técnicas Referen ... <a href="#">Visualizar Vaga</a>
            </p>
        </div>
    </div>

    <div class="rodape">
        <footer>
            <div class="logo">MigraJobs</div>
            <br><br>© MigraJobs atividades de Internet, Ltda. Todos os direitos reservados.
        </footer>
    </div>

</body>
</html>