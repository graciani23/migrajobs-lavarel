

<header>
        <div class="container">
            <div class="principal d-flex align-items-center">
            <div class="logo"><a href="index">MigraJobs</a></div>
                <nav class="pt-3">
                    <ul class="">
                    <li><a href="{{route('homeCandidatoShow', $candidatos)}}">Home</a></li>
                        <li><a href="#">Candidaturas</a></li>
                        <li><a href="search">Buscar vagas</a></li>
                        <li><a href="#">Currículo</a></li>
                    </ul>
                </nav>

                <div class="user">
                <label class="" for="">Olá {{$candidatos->name}} </label>
                </div>

                <div class="logout">
                    <li><a href="" class="sair">Sair</a></li>
                </div>
            </div>
        </div>